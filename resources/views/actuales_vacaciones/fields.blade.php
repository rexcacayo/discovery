<!-- Lugar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lugar', 'Lugar:') !!}
    {!! Form::text('lugar', null, ['class' => 'form-control']) !!}
</div>

<!-- Costo Noche Field -->
<div class="form-group col-sm-6">
    {!! Form::label('costo_noche', 'Costo Noche:') !!}
    {!! Form::text('costo_noche', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Noche Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_noche', 'Numero Noche:') !!}
    {!! Form::text('numero_noche', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::text('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::text('cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('actualesVacaciones.index') !!}" class="btn btn-default">Cancel</a>
</div>
