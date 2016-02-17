@extends('index')
@section('content')
    <h1>Alex and Kelli's Wedding Date</h1>
    <br>
    <hr>
    <div class="well well-lg">
        <h2 style="color: #9d9d9d">Thank you for your R.S.V.P!!</h2>
        <br>
        <h3>
            <span style="color: #222222">
                {{ $request->first }} {{$request->last}}
            </span>
        </h3>
        <br>
        <h3 style="color: #9d9d9d">Hope to see you soon!</h3>
    </div>
@stop

