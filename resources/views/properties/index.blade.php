
@extends('layouts.master')
@section('content')
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
@endsection
