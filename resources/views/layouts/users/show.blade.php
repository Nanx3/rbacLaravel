@extends('layouts.dashboard')

@section('page')
    @php $currentPage = 'users' @endphp
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="card">
            <div class="card-header">Show</div>
            <div class="card-body">
                <dl class="row">
                    <dt class="col-sm-3">First name</dt>
                    <dd class="col-sm-9">{{ $user->first_name }}</dd>

                    <dt class="col-sm-3">Last name</dt>
                    <dd class="col-sm-9">{{ $user->last_name }}</dd>

                    <dt class="col-sm-3">Email</dt>
                    <dd class="col-sm-9">{{ $user->email }}</dd>

                    <dt class="col-sm-3">Phone</dt>
                    <dd class="col-sm-9">{{ $user->phone_number }}</dd>

                    <dt class="col-sm-3">Date</dt>
                    <dd class="col-sm-9">{{ $user->created_at }}</dd>
                </dl>
            </div>
        </div>
    </div>
</div>
@endsection