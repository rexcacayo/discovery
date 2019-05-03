<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Id Cliente:') !!}
    {!! Form::text('cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais', 'Pais:') !!}
    {!! Form::select('pais', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Nombredesarrollo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombredesarrollo', 'Nombredesarrollo:') !!}
    {!! Form::text('nombredesarrollo', null, ['class' => 'form-control']) !!}
</div>

<!-- Fechacompra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechaCompra', 'Fechacompra:') !!}
    {!! Form::text('fechaCompra', null, ['class' => 'form-control']) !!}
</div>

<!-- Mantenimiento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mantenimiento', 'Mantenimiento:') !!}
    {!! Form::text('mantenimiento', null, ['class' => 'form-control']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('precio', 'Precio:') !!}
    {!! Form::text('precio', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comentario', 'Comentario:') !!}
    {!! Form::text('comentario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('propiedadesvacacionales.index') !!}" class="btn btn-default">Cancel</a>
</div>
