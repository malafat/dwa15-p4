<div class="form-group">
  {!! Form::label('address', 'Address')!!}
  {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('city', 'City')!!}
  {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('state', 'State')!!}
  {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('area', 'Area')!!}
  {!! Form::text('area', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('rent', 'Rent')!!}
  {!! Form::text('rent', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('beds', 'Beds')!!}
  {!! Form::text('beds', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('baths', 'Baths')!!}
  {!! Form::text('baths', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('notes', 'Misc Notes')!!}
  {!! Form::text('notes', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control'])!!}
</div>
