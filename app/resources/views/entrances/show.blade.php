@extends('layouts.index')

@section('content')

    <div class="row ">

        <div class="col-12">
            <a href="{{ route('entrances.index') }}" class="btn btn-secondary">Back</a>
        </div>


        <dl class="col-12 my-2">
            <dt class="col-sm-3">Number</dt>
         <dd class="col-sm-9">{{ $entrance->number }}</dd>
        </dl>

        <dl class="col-12 my-2">
            <dt class="col-sm-3">House</dt>
            <dd class="col-sm-9">{{ $entrance->house_id }}</dd>
        </dl>

        <dl class="col-12 my-2">
            <dt class="col-sm-3">Floors</dt>
            <dd class="col-sm-9">{{ $entrance->floors_numb }}</dd>
        </dl>

        <dl class="col-12 my-2">
            <dt class="col-sm-3">Created</dt>
            <dd class="col-sm-9">{{ $entrance->created_at }}</dd>
        </dl>

        <dl class="col-12 my-2">
            <dt class="col-sm-3">Updated</dt>
            <dd class="col-sm-9">{{ $entrance->updated_at }}</dd>
        </dl>



    </div>

@endsection