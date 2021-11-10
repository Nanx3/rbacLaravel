@extends('layouts.dashboard')

@section('page')
    @php $currentPage = 'users' @endphp
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="title-1 m-b-25">Users list</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th class="text-right">Email</th>
                        <th class="text-right">Phone</th>
                        <th class="text-right">Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name}}</td>
                        <td class="text-right">{{ $user->email }}</td>
                        <td class="text-right">{{ $user->phone_number }}</td>
                        <td class="text-right">{{ $user->created_at }}</td>
                        <td>
                            <div class="table-data-feature">
                                @can('users.show')
                                <a href="{{ route('users.show', $user->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                    <i class="fa fa-eye"></i>
                                </a>
                                @endcan
                                @can('users.edit')
                                <a href="{{ route('users.edit', $user->id) }}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </a>
                                @endcan
                                @can('users.destroy')
                                <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </form>
                                @endcan
                            </div>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection