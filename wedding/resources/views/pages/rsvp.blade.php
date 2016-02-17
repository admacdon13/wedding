@extends('index')
@section('content')
    <h1>Alex and Kelli's Wedding</h1>
    <h3>R.S.V.P.</h3>
    <hr>
    {!! Form::open(['url' => 'rsvp']) !!}
    <div class="form-group">
        {!! Form::label('first', 'First Name:') !!}
        {!! Form::text('first', null, ['class' => 'form-control', 'placeholder' => 'John']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('last', 'Last Name:') !!}
        {!! Form::text('last', null, ['class' => 'form-control', 'placeholder' => 'Doe']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('comment', 'Comments:') !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control' , 'placeholder' => 'Comment...']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('response', 'Do you plan to attend :') !!}
        &nbsp;
        {!! Form::label('response', '  yes') !!}
        {!! Form::radio('response', 'Attending', false, ['style' => 'background-color: #222222;']) !!}
        &nbsp;
        {!! Form::label('response', '  no') !!}
        {!! Form::radio('response', 'Not Attending', true, ['style' => 'background-color: #222222;']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit("Submit RSVP", ['class' => 'btn btn-primary form-control', 'style' => 'background-color: #222222;']) !!}
    </div>
    {!! Form::close() !!}

    @include('errors.list')

@stop

