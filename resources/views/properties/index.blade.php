
@extends('layouts.master')
@section('content')
  <h2> Properties </h2>
  <table class="table sortable">
    <thead>
      <tr>
        @foreach($columns as $column)
          <th>{{$column}}</th>
        @endforeach
      </tr>
    </thead>
    <tbody>
      @foreach($properties as $property)
        @include('.properties._row')
      @endforeach
    </tbody>
  </table>
  <a href="/properties/create"> Add New Property </a>
@endsection
