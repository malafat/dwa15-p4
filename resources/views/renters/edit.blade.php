@extends('layouts.master')
@section('content')
  <h1>Edit Renter</h1>
  <hr/>

  {!! Form::model($renter, ['method' => 'PATCH', 'action' => ['RentersController@update', $renter->id]]) !!}

  @include('renters._form', ['submitButtonText' => 'Submit Changes'])

  {!! Form::close() !!}
  {!! Form::open(['route' => ['renters.destroy', $renter->id], 'method' => 'delete']) !!}
  <button type="submit" class= 'btn btn-primary form-control'>Delete</button>
  {!! Form::close() !!}
  {!! Form::open(['route' => ['contracts.create', $renter->id], 'method' => 'get']) !!}
  <button type="submit" class= 'btn btn-primary form-control'>Create Lease</button>
  {!! Form::close() !!}
  @include('errors.list')
@endsection
