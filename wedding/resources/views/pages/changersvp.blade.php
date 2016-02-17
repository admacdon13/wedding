@extends('index')
@section('content')
    <h1>Alex and Kelli's Wedding</h1>
    <h3>RSVP</h3>
    <hr>
    {!! Form::model($rsvp, ['method' => 'PATCH', 'action' => ['RsvpController@update', $rsvp->id]]) !!}
    <div class="form-group">
        {!! Form::label('first', 'First Name:') !!}
        {!! Form::text('first', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('last', 'Last Name:') !!}
        {!! Form::text('last', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('comment', 'Comments:') !!}
        {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('response', 'Do you plan to attend :') !!}
        {{--{!! Form::checkbox('response', 'false') !!}--}}
        &nbsp;
        {!! Form::label('response', '  yes') !!}
        {!! Form::radio('response', 'attending', false) !!}
        &nbsp;
        {!! Form::label('response', '  no') !!}
        {!! Form::radio('response', 'notattending', true) !!}
    </div>
    <div class="form-group">
        {!! Form::submit("Submit RSVP", ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
@stop

