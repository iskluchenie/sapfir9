@extends('layouts.index')

@section('content')

<div class="col-12">

    <form class="form-inline">
        <div class="col-sm-10 my-1 d-flex">
            <label class="mr-2" for="inlineFormInputName">Name</label>
            <input name="search" type="text" class="form-control flex-grow-1" id="inlineFormInputName" placeholder="Enter search name">
        </div>
        <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

</div>

<div class="col-12">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Role</th>
                <th scope="col">Gender</th>
                <th scope="col">Salary</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <th scope="row">{{ $loop->index +1 }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->salary }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('users.show', ['user' => $user->id]) }}">More</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
