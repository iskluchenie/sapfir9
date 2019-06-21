@extends('layouts.index')

@section('content')

    <div class="row">

        <div class="col-12">
            <a href="{{ route('entrances.create') }}" class="btn btn-success">Create</a>
        </div>

        <table class="table table-striped table-hover table-sm">
            <thead>
            <tr class="table-warning">
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Street>
                <th scope="col">House</th>
                <th scope="col">Floors</th>
                <th scope="col">Create</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($entrances as $entrance)
                <tr>
                    <th scope="row">{{ $loop->index +1 }}</th>
                    <td>{{ $entrance->id }}</td>
                    <td>{{ $entrance->number }}</td>
                    <td>{{ $entrance->house->street['name'] }}</td>
                    <td>{{ $entrance->house['name'] }}</td>
                    <td>{{ $entrance->floors_numb }}</td>
                    <td>{{ $entrance->created_at }}</td>
                    <td>
                        <a href="{{ route('entrances.show', ['entrance' => $entrance->id]) }}">More</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection