
<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $cliente->id !!}</p>
</div>

<!-- Fecha Field -->
<div class="form-group">
    {!! Form::label('fecha', 'Fecha:') !!}
    <p>{!! $cliente->fecha !!}</p>
</div>

<!-- Hora Field -->
<div class="form-group">
    {!! Form::label('hora', 'Hora:') !!}
    <p>{!! $cliente->hora !!}</p>
</div>

<!-- Promotor Id Field -->
<div class="form-group">
    {!! Form::label('promotor', 'Promotor:') !!}
    {!! $cliente->promotor !!}
    <p></p>
</div>

<!-- Nombreinvitado Field -->
<div class="form-group">
    {!! Form::label('nombreinvitado', 'Nombre invitado:') !!}
    <p>{!! $cliente->nombreinvitado !!}</p>
</div>

<!-- Nombreconyugue Field -->
<div class="form-group">
    {!! Form::label('nombreconyugue', 'Nombre conyugue:') !!}
    <p>{!! $cliente->nombreconyugue !!}</p>
</div>

<!-- Edadinvitado Field -->
<div class="form-group">
    {!! Form::label('edadinvitado', 'Edad invitado:') !!}
    <p>{!! $cliente->edadinvitado !!}</p>
</div>

<!-- Edadconyugue Field -->
<div class="form-group">
    {!! Form::label('edadconyugue', 'Edad conyugue:') !!}
    <p>{!! $cliente->edadconyugue !!}</p>
</div>

<!-- Ocupacioninvitado Field -->
<div class="form-group">
    {!! Form::label('ocupacioninvitado', 'Ocupación invitado:') !!}
    <p>{!! $cliente->ocupacioninvitado !!}</p>
</div>

<!-- Ocupacionconyugue Field -->
<div class="form-group">
    {!! Form::label('ocupacionconyugue', 'Ocupación conyugue:') !!}
    <p>{!! $cliente->ocupacionconyugue !!}</p>
</div>

<!-- invitados -->
<!-- preguntas Field -->
<div class="form-group">
{!! Form::label('invitado', 'Invitados:') !!}
    <table class="table table-responsive" id="clientes-table">
        <thead>
            <tr>
                <th>N#</th>
                <th>Invitado</th>
            </tr>
        </thead>
    <tbody>
    @foreach($invitados as $invitado)
        <tr>
            <td>{!!$invitado->id !!}</td> 
            <td>{!! $invitado->nombreinvitado !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>


<!-- Activoinvitado Field -->
<div class="form-group">
    {!! Form::label('activoinvitado', 'Activo invitado:') !!}
    @if ($cliente->activoinvitado === '1')
        <p>SI</p>
    @else
        <p>NO</p>
    @endif
    
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Dirección:') !!}
    <p>{!! $cliente->direccion !!}</p>
</div>

<!-- Pais Field -->
<div class="form-group">
    {!! Form::label('pais', 'País:') !!}
    <p>{!! $cliente->pais !!}</p>
</div>

<!-- tarjetas -->

<div class="form-group">
{!! Form::label('tarjetas', 'Tarjetas:') !!}
    <table class="table table-responsive" id="clientes-table">
        <thead>
            <tr>
                <th>Número</th>
                <th>Tipo</th>
                <th>Clase</th>
            </tr>
        </thead>
    <tbody>
    @foreach($tarjetas as $tarjeta)
        <tr>
            <td>{!! $tarjeta->numero !!}</td> 
            <td>{!! $tarjeta->marca !!}</td>
            <td>{!! $tarjeta->tipo !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

<!-- Propietarioclub Field -->
<div class="form-group">
    {!! Form::label('propietarioclub', 'Propietario club:') !!}
    @if ($cliente->propietarioclub === '1')
        <p>SI</p>
    @else
        <p>NO</p>
    @endif
    
</div>

<div class="form-group">
{!! Form::label('propietario', 'Donde?:') !!}
    <table class="table table-responsive" id="clientes-table">
        <thead>
            <tr>
                <th>N#</th>
                <th>Donde</th>
            </tr>
        </thead>
    <tbody>
    @foreach($dondes as $donde)
        <tr>
            <td>{!! $donde->id !!}</td> 
            <td>{!! $donde->nombreclub !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

<!-- Aceptoterm Field -->
<div class="form-group">
    {!! Form::label('aceptoterm', 'Acepto los términos:') !!}
    @if ($cliente->aceptoterm === '1')
        <p>SI</p>
    @else
        <p>NO</p>
    @endif
</div>

<!-- propiedades vacaionales Field -->
<div class="form-group">
{!! Form::label('propiedades', 'Propiedeades vacacionales:') !!}
    <table class="table table-responsive" id="clientes-table">
        <thead>
            <tr>
                <th>N#</th>
                <th>País</th>
                <th>Nombre del Desarrollo</th>
                <th>Fecha de compra</th>
                <th>Precio</th>
                <th>Mantenimiento</th>
                <th>Comentarios</th>
            </tr>
        </thead>
    <tbody>
    @foreach($propiedades as $propiedad)
        <tr>
            <td>{!! $propiedad->id !!}</td> 
            <td>{!! $propiedad->pais !!}</td>
            <td>{!! $propiedad->nombredesarrollo !!}</td>
            <td>{!! $propiedad->fechaCompra !!}</td>
            <td>{!! $propiedad->mantenimiento !!}</td>
            <td>{!! $propiedad->precio !!}</td>
            <td>{!! $propiedad->comentario !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

