<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{  
    public function __construct() {
        $this->middleware('can:users.index')->only('index');
        $this->middleware('can:users.edit')->only('edit', 'update');
        $this->middleware('can:users.edit')->only('create', 'store');
        $this->middleware('can:users.destroy')->only('destroy');
    }

    public function index() {
        $users = User::all();
        return view('layouts.users.list', compact('users'));
    }
    
    public function create() {
        return view('create');
    }
    
    public function store(Request $request) {
        $request->validate([
            "first_name" => 'required | max:255',
            "last_name" => 'required | max:255',
            "email" => 'required | email | max:255',
            "phone_number" => 'required | max:15'
        ]);
        User::create($request->all());
        return redirect()->route('users.index');
    }
 
    public function show(User $user) {
        return view('layouts.users.show', compact('user'));
    }
    
    public function edit(User $user) {
        return view('layouts.users.edit', compact('user'));
    }
    
    public function update(Request $request, User $user) {       
        $request->validate([
            "first_name" => 'required | max:255',
            "last_name" => 'required | max:255',
            "email" => 'required | email | max:255',
            "phone_number" => 'required | max:15'
        ]);
        $user->update($request->all());
        return redirect()->route('users.index');
    } 
    
    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('users.index');
    }
}
