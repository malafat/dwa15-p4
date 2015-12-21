
@extends('layouts.master')
@section('content')
  <h2> Leases </h2>
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
  <a href="/contracts/all"> See all leases </a>
  <br>
  <a href="/contracts/create"> Create new Lease </a>

@endsection
