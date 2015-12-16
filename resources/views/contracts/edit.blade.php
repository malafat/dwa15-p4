@extends('layouts.master')
@section('content')
  <h1>Edit Contract</h1>
  <hr/>

  {!! Form::model($contract, ['method' => 'PATCH', 'action' => ['ContractsController@update', $contract->id]]) !!}

  @include('contracts._form', ['submitButtonText' => 'Submit Changes'])

  {!! Form::close() !!}

  @include('errors.list')
@endsection
