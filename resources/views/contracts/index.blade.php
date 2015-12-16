
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
      @foreach($contracts as $contract)
        @include('.contracts._row')
      @endforeach
    </tbody>
  </table>
@endsection
