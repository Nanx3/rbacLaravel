@extends('layouts.dashboard')

@section('page')
    @php $currentPage = 'users' @endphp
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="card">
            <div class="card-header">Edit user</div>
            <div class="card-body">
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="first_name">First name</label>
                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter first name"  value="{{ old('first_name', $user->first_name) }}">
                    </div>

                    @error('first_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="last_name">Last name</label>
                        <input type="text" class="form-control" name="last_name"  id="last_name" placeholder="Enter last name"  value="{{ old('last_name', $user->last_name) }}">
                    </div>

                    @error('last_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email', $user->email) }}">
                    </div>

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="phone_number">Phone</label>
                        <input type="text" class="form-control" name="phone_number"  id="phone_number" placeholder="Enter phone number"  value="{{ old('phone_number', $user->phone_number) }}">
                    </div>

                    @error('phone_number')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection