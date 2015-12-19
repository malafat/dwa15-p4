
<div class="form-group">
  {!! Form::label('property_id', 'Property')!!}
  <select name='property_id'>
    @foreach($properties as $property)
      <option value= {{$property['id']}}>{{$property['address']}} </option>
    @endforeach
  </select>
</div>
<div class="form-group">
  {!! Form::label('renter_id', 'Renter')!!}
  <select name='renter_id'>
    @foreach($renters as $renter)
      <option value= {{$renter['id']}} > {{$renter['first_name'].' '.$renter['last_name']}} </option>
    @endforeach
  </select>
</div>
<div class="form-group">
  {!! Form::label('term_start', 'Term Start')!!}
  {!! Form::text('term_start', Carbon\Carbon::now()->toDateString(), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('term_end', 'Term End')!!}
  {!! Form::text('term_end', Carbon\Carbon::now()->toDateString(), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('rent', 'Rent')!!}
  {!! Form::text('rent', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control'])!!}
</div>
