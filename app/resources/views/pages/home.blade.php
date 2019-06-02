@extends('layouts.index')

@section('title')
    Laravel course || Home page
@endsection

@section('content')
    <div class="col">
        <h1>Home</h1>
    </div>
@endsection

@section('javascript')
@parent
<script>

    console.log('App was load...')

</script>
@endsection
