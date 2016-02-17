@extends('index')
@section('content')
    <h1>Alex and Kelli's Wedding</h1>
    <h3>Music Requests</h3>
    <hr>
    @foreach($songs as $song)
        <address class="well well-lg" style="color: #222222; font-size: larger;">
            <label>Artist(s): </label>&nbsp;{{$song->artist}}
            <br>
            <label>Song: </label>&nbsp;{{$song->song}}
            <br>
            <label>Chosen By: </label>&nbsp;{{$song->chosenby}}
            <br>
            <label>Comment</label>&nbsp;{{$song->comment}}
        </address>
        <hr>
    @endforeach
@stop