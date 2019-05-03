<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $invitados->id !!}</p>
</div>

<!-- Id Cliente Field -->
<div class="form-group">
    {!! Form::label('cliente_id', 'Id Cliente:') !!}
    <p>{!! $invitados->cliente_id !!}</p>
</div>

<!-- Nombreinvitado Field -->
<div class="form-group">
    {!! Form::label('nombreinvitado', 'Nombreinvitado:') !!}
    <p>{!! $invitados->nombreinvitado !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $invitados->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $invitados->updated_at !!}</p>
</div>

