
@extends('layouts.master')


@section('content')
  <h1>Property Details</h1>
  <hr/>
  {!! Form::open(['url' => 'properties']) !!}
    <div class="form-group">
      {!! Form::label('address', 'Address')!!}
      {!! Form::text('address', $property['address'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('city', 'City')!!}
      {!! Form::text('city', $property['city'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('state', 'State')!!}
      {!! Form::text('state', $property['state'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('area', 'Area')!!}
      {!! Form::text('area', $property['area'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('base_rent', 'Base Rent')!!}
      {!! Form::text('base_rent', $property['base_rent'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('beds', 'Beds')!!}
      {!! Form::text('beds', $property['beds'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('baths', 'Baths')!!}
      {!! Form::text('baths', $property['baths'], ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('notes', 'Misc Notes')!!}
      {!! Form::text('notes', $property['notes'], ['class' => 'form-control']) !!}
    </div>


  {!! Form::close() !!}

@endsection
