<!-- Lugar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lugar', 'Lugar:') !!}
    {!! Form::text('lugar', null, ['class' => 'form-control']) !!}
</div>

<!-- Ano Uso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ano_uso', 'Ano Uso:') !!}
    {!! Form::text('ano_uso', null, ['class' => 'form-control']) !!}
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

<!-- Sub-Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub-total', 'Sub-Total:') !!}
    {!! Form::text('sub-total', null, ['class' => 'form-control']) !!}
</div>

<!-- Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Cliente Id:') !!}
    {!! Form::text('cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('futurasVacaciones.index') !!}" class="btn btn-default">Cancel</a>
</div>
