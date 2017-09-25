@extends('layouts.js')
    <h1>{{__('Add a Doctor')}}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
        {{ Form::open(array("action" => "DoctorsController@addDoctor")) }}
            {{ Form::label('name', __('Name'), array('class'=>'control-label')) }}
            {{ Form::text('name') }}
    <br />
            {{ Form::label('crm', __('CRM'), array('class'=>'control-label')) }}
            {{ Form::text('crm') }}
    <br />
            {{ Form::label('email', __('Email'), array('class'=>'control-label')) }}
            {{ Form::text('email','', array('id'=> 'email')) }}
    <br />
            {{ Form::label('password', __('Password'), array('class'=>'control-label')) }}
            {{ Form::password('password') }}
    <br />
            {{ Form::label('address', __('Address'), array('class'=>'control-label')) }}
            {{ Form::text('address') }}
    <br />
            {{ Form::label('state', __('State'), array('class'=>'control-label')) }}
            {{ Form::text('state') }}
    <br />
            {{ Form::label('city', __('City'), array('class'=>'control-label')) }}
            {{ Form::text('city') }}
    <br />
            {{ Form::label('phone', __('Phone'), array('class'=>'control-label')) }}
            {{ Form::text('phone', '', array('id'=> 'phone')) }}
    <br />
            {{ Form::submit(__('Save'), array('class' => 'btn btn-default')) }}
        {{ Form::close() }}
    </body>
</html>