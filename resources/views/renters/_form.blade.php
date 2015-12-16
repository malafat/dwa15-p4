<div class="form-group">
  {!! Form::label('first_name', 'First Name')!!}
  {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('last_name', 'Last Name')!!}
  {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('phone_number', 'Phone Number')!!}
  {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('email', 'Email Address')!!}
  {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('notes', 'Notes')!!}
  {!! Form::text('notes', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control'])!!}
</div>
