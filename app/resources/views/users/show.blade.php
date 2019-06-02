@extends('layouts.index')

@section('content')
<div class="col">

    <h1>Show user's detail</h1>

    <div class="row">
        <a href="{{ route('users.index') }}" class="btn btn-primary"> back</a>
    </div>

    <dl class="row">
        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9">{{ $user->name }}</dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-3">First</dt>
        <dd class="col-sm-9">{{ $user->first_name }}</dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-3">Last</dt>
        <dd class="col-sm-9">{{ $user->last_name }}</dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-3">Role</dt>
        <dd class="col-sm-9">{{ $user->role }}</dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-3">Gender</dt>
        <dd class="col-sm-9">{{ $user->gender }}</dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-3">Salary</dt>
        <dd class="col-sm-9">{{ $user->salary }}</dd>
    </dl>
    <dl class="row">
        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9">{{ $user->email }}</dd>
    </dl>

</div>
@endsection
