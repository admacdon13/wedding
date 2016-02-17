@extends('index')
@section('content')
    <h1>Alex and Kelli's Wedding</h1>
    <h3>Music Requests</h3>
    <hr>
    {!! Form::open(['url' => 'music']) !!}
    <div class="form-group">
        {!! Form::label('artist', 'Artist: ') !!}
        {!! Form::text('artist', null, ['class' => 'form-control', 'placeholder' => 'Sublime']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('song', 'Song: ') !!}
        {!! Form::text('song', null, ['class' => 'form-control', 'placeholder' => 'What I Got']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('chosenby', 'Chosen By: ') !!}
        {!! Form::text('chosenby', null, ['class' => 'form-control', 'placeholder' => 'John Doe']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('comment', 'Comments: ') !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Comments...']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit("Submit Music Request", ['class' => 'btn btn-primary form-control', 'style' => 'background-color: #222222;']) !!}
    </div>
    {!! Form::close() !!}

    @include('errors.list')
@stop

