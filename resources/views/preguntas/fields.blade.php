<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Id Cliente:') !!}
    {!! Form::text('cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pregunta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pregunta', 'Pregunta:') !!}
    {!! Form::text('pregunta', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('preguntas.index') !!}" class="btn btn-default">Cancel</a>
</div>
