
@extends('layouts.master')


@section('content')
  <h2> Renters </h2>
  <table class="table sortable">
    <thead>
      <tr>
        @foreach($columns as $column)
          <th>{{$column}}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      @foreach($renters as $renter)
        @include('.renters._row')
      @endforeach
    </tbody>
  </table>
  <a href="/renters/create"> Add New Renter </a>
@endsection
