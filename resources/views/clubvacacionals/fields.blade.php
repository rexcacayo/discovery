<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    {!! Form::text('id_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombreclub Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreclub', 'Nombreclub:') !!}
    {!! Form::text('nombreclub', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clubvacacionals.index') !!}" class="btn btn-default">Cancel</a>
</div>
