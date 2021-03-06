@extends('layouts.app')

@section('title', 'Answer Registration')

@section('content')
    <h1>{{__('Add an answer')}}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif
    {{ Form::open(array("action" => "AnswersController@addAnswer")) }}

    {{ Form::label('question', __('Question'), array('class'=>'control-label')) }}
    {{ Form::select('question', $questions) }}
    <br/>
    {{ Form::label('answer', __('Answer'), array('class'=>'control-label')) }}
    {{ Form::text('answer') }}
    <br/>
    {{ Form::submit(__('Save'), array('class' => 'btn btn-default')) }}
    {{ Form::close() }}
@endsection