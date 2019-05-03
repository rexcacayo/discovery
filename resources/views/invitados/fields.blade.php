<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cliente_id', 'Id Cliente:') !!}
    {!! Form::text('cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombreinvitado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreinvitado', 'Nombreinvitado:') !!}
    {!! Form::text('nombreinvitado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('invitados.index') !!}" class="btn btn-default">Cancel</a>
</div>
