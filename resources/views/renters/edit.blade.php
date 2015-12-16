@extends('layouts.master')
@section('content')
  <h1>Edit Renter</h1>
  <hr/>

  {!! Form::model($renter, ['method' => 'PATCH', 'action' => ['RentersController@update', $renter->id]]) !!}

  @include('renters._form', ['submitButtonText' => 'Submit Changes'])

  {!! Form::close() !!}

  @include('errors.list')
@endsection
