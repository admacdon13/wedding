@extends('index')
@section('content')
    <h1>Alex and Kelli's Wedding</h1>
    <h3>Guest List</h3>
    <hr>
    @foreach($rsvps as $rsvp)
        <address class="well well-lg" style="color: #222222; font-size: larger;">
            <label>ID: </label>&nbsp;{{$rsvp->id}}<br>
            <label>Name </label>&nbsp;{{$rsvp->first}} {{$rsvp->last}}<br>
            <label>Comment: </label>&nbsp;{{$rsvp->comment}}<br>
            <label>Response</label>&nbsp;{{$rsvp->response}}
        </address>
        <hr>
    @endforeach
@stop