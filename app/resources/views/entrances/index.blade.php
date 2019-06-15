@extends('layouts.index')

@section('content')

    <div class="row">

        <div class="col-12">
            <a href="{{ route('entrances.create') }}" class="btn btn-success">Create</a>
        </div>

        @foreach($entrances as $entrance)
            <div class="col-6 my-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $entrance->number }}</h5>
                        <p class="card-text">
                            {{ $entrance->floors_numb }}
                        </p>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('entrances.show',['id' => $entrance->id]) }}" class="btn btn-primary mr-2">Show more</a>
                            <a href="{{ route('entrances.edit',['id' => $entrance->id]) }}" class="btn btn-warning mr-2">Edit</a>
                            <form action="{{ route('entrances.destroy', ['id' => $entrance->id]) }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                        </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection