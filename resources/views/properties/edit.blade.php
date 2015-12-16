@extends('layouts.master')
@section('content')
  <h1>Edit Property</h1>
  <hr/>

  {!! Form::model($property, ['method' => 'PATCH', 'action' => ['PropertiesController@update', $property->id]]) !!}

  @include('properties._form', ['submitButtonText' => 'Submit Changes'])

  {!! Form::close() !!}

  @include('errors.list')
@endsection
