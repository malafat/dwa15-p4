@extends('layouts.master')
@section('content')
  <h1>Create Property</h1>
  <hr/>
  {!! Form::open(['url' => 'properties', 'class' => 'form-horizontal']) !!}
  @include('properties._form', ['submitButtonText' => 'Add Property'])

  {!! Form::close() !!}
  @include('errors.list')
@endsection
