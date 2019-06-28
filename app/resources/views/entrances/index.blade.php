@extends('layouts.index')

@section('content')

    <div class="row">

        <div class="col-12">
            <a href="{{ route('entrances.create') }}" class="btn btn-success">Create</a>
        </div>

        {{ $entrances->links() }}

        <table class="table table-striped table-hover table-sm">
            <thead>
            <tr class="table-warning">
                <th scope="col">#</th>
                <th scope="col">Town</th>
                <th scope="col">Street</th>
                <th scope="col">House</th>
                <th scope="col">Name</th>
                <th scope="col">ID</th>
                <th scope="col">Floors</th>

            </tr>
            </thead>
            <tbody>

            @foreach($entrances->getCollection() as $entrance)
                <tr>
                    <th scope="row">{{  $entrances->perPage() * ($entrances->currentPage()-1) + $loop->index +1 }}</th>
                    <td>{{ $entrance->house->street->town->name }}</td>
                    <td>{{ $entrance->house->street->name }}</td>
                    <td>{{ $entrance->house->name }}</td>
                    <td>{{ $entrance->number }}</td>
                    <td><a href="{{ route('entrances.show', ['entrance' => $entrance->id]) }}">{{ $entrance->id }}</a></td>
                    <td>{{ $entrance->floors_numb }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $entrances->links() }}

    </div>


@endsection