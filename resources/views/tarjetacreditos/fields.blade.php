<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::select('tipo', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Marca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('marca', 'Marca:') !!}
    {!! Form::select('marca', ], null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero', 'Numero:') !!}
    {!! Form::text('numero', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Id Cliente:') !!}
    {!! Form::text('cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tarjetacreditos.index') !!}" class="btn btn-default">Cancel</a>
</div>
