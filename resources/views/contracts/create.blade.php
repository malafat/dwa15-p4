@extends('layouts.master')
@section('content')
  <h1>Create Contract</h1>
  <hr/>
  {!! Form::open(['url' => 'contracts', 'class' => 'form-group']) !!}
  @include('contracts._form', ['submitButtonText' => 'Add Contract'])

  {!! Form::close() !!}

  @include('errors.list')
@endsection
