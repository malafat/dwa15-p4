
<div class="form-group">
  {!! Form::label('term_start', 'Term Start')!!}
  {!! Form::text('term_start', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('term_end', 'Term End')!!}
  {!! Form::text('term_end', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('rent', 'Rent')!!}
  {!! Form::text('rent', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control'])!!}
</div>
