@extends('layouts.master')
@section('content')
  <h1>Create Renter</h1>
  <hr/>
  {!! Form::open(['url' => 'renters']) !!}
  @include('renters._form', ['submitButtonText' => 'Add Renter'])

  {!! Form::close() !!}
  @include('errors.list')
@endsection
