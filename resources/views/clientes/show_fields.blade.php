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

<!-- preguntas Field -->
<div class="form-group">
{!! Form::label('preguntas', 'Preguntas:') !!}
    <table class="table table-responsive" id="clientes-table">
        <thead>
            <tr>
                <th>N#</th>
                <th>Pregunta</th>
            </tr>
        </thead>
    <tbody>
    @foreach($preguntas as $pregunta)
        <tr>
            <td>{!! $pregunta->id !!}</td> 
            <td>{!! $pregunta->pregunta !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>

<!-- Comentarios Field -->
<div class="form-group">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    <p>{!! $cliente->comentarios !!}</p>
</div>

<!-- vacacionan field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('vacacionan', 'Usualmente vacacionan:') !!}
    {!! $cliente->vacacionan !!}
</div>

<!-- importancia_vacaciones field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('importancia_vacaciones', 'Que clasificación le dan a la importacia de sus vacaciones. Del 1 al 10:') !!}
    {!! $cliente->importancia_vacaciones !!}
</div>

<!-- porque field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('porque', 'Por qué?') !!}
    {!! $cliente->porque !!}
</div>

<!-- tipos_vacaciones field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tipos_vacaciones', 'Vacacionar para usted es:') !!}
    {!! $cliente->tipos_vacaciones !!}
</div>

<!-- porque2 field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('porque2', 'Por qué?') !!}
    {!! $cliente->porque2 !!}
</div>

<!-- tiempo_reserva field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tiempo_reserva', 'Con Cuánto tiempo de anticipación reserva sus vacaciones?') !!}
    {!! $cliente->tiempo_reserva !!}
</div>

<!-- reserva field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('reserva', 'Reserva por:') !!}
    {!! $cliente->reserva !!}
</div>

<!-- cuanto_ano field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cuanto_ano', 'Cuántas veces al año vacionan?') !!}
    {!! $cliente->cuanto_ano !!}
</div>

<!-- cuanto_noche field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cuanto_noche', 'Cuántas noches?') !!}
    {!! $cliente->cuanto_noche !!}
</div>

<!-- ubicacion field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ubicacion', 'Donde les gusta ir?') !!}
    {!! $cliente->ubicacion !!}
</div>

<!-- internacional_donde field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('internacional', 'Han vacacionado internacionalmente:') !!}
    {!! $cliente->internacional !!}
</div>


<!-- internacional_donde field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('internacional_donde', 'A dónde?') !!}
    {!! $cliente->internacional_donde !!}
</div>

<!-- presentaciones field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('presentaciones', 'Han estado en presentaciones como esta?') !!}
    {!! $cliente->presentaciones !!}
</div>

<!-- presentaciones_socio field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('presentaciones_socio', 'Es socio?') !!}
    {!! $cliente->presentaciones_socio !!}
</div>

<!-- presentaciones_porque field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('presentaciones_porque', 'Por qué?') !!}
    {!! $cliente->presentaciones_porque !!}
</div>

<!-- presentaciones_costo field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('presentaciones_costo', 'Costo') !!}
    {!! $cliente->presentaciones_costo !!}
</div>

<!-- opinion_sisvacacionales field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('opinion_sisvacacionales', 'Qué opinión tiene de los Sistemas Vacacionales?') !!}
    {!! $cliente->opinion_sisvacacionales !!}
</div>

<!-- ultimas vacaciones -->


<div class="form-group">
{!! Form::label('pasadas', 'Ultimas Vacaciones:') !!}
    <table class="table table-responsive" id="clientes-table">
        <thead>
            <tr>
                <th>N#</th>
                <th>Lugar</th>
                <th>Año de uso</th>
                <th>Costo por noche</th>
                <th>Número de noches</th>
                <th>Sub-total</th>

            </tr>
        </thead>
    <tbody>
    @foreach($pasadasVacaciones as $pasadasVacacione)
        <tr>
            <td>{!! $pasadasVacacione->id !!}</td> 
            <td>{!! $pasadasVacacione->lugar !!}</td>
            <td>{!! $pasadasVacacione->ano_uso !!}</td>
            <td>{!! $pasadasVacacione->costo_noche !!}</td>
            <td>{!! $pasadasVacacione->numero_noche !!}</td>
            <td>{!! $pasadasVacacione->sub_total !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>


<!-- total3vacacionespasadas field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('total3vacacionespasadas', 'Total') !!}
    {!! $cliente->total3vacacionespasadas !!}
</div>

<!-- vacaciones actuales -->


<div class="form-group">
{!! Form::label('actual', 'Actual Vacaciones:') !!}
    <table class="table table-responsive" id="clientes-table">
        <thead>
            <tr>
                <th>N#</th>
                <th>Lugar</th>
                <th>Costo por noche</th>
                <th>Número de noches</th>
                <th>Sub-Total</th>

            </tr>
        </thead>
    <tbody>
    @foreach($actualVacaciones as $actualVacacione)
        <tr>
            <td>{!! $actualVacacione->id !!}</td> 
            <td>{!! $actualVacacione->lugar !!}</td>
            <td>{!! $actualVacacione->costo_noche !!}</td>
            <td>{!! $actualVacacione->numero_noche !!}</td>
            <td>{!! $actualVacacione->sub_total !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>



<!-- vacaciones futuras -->

<div class="form-group">
{!! Form::label('futuras', 'Futuras Vacaciones:') !!}
    <table class="table table-responsive" id="clientes-table">
        <thead>
            <tr>
                <th>N#</th>
                <th>Lugar</th>
                <th>Año de uso</th>
                <th>Costo por noche</th>
                <th>Número de noches</th>
                <th>Sub-Total</th>

            </tr>
        </thead>
    <tbody>
    @foreach($futurasVacaciones as $futurasVacacione)
        <tr>
            <td>{!! $futurasVacacione->id !!}</td> 
            <td>{!! $futurasVacacione->lugar !!}</td>
            <td>{!! $futurasVacacione->ano_uso !!}</td>
            <td>{!! $futurasVacacione->costo_noche !!}</td>
            <td>{!! $futurasVacacione->numero_noche !!}</td>
            <td>{!! $futurasVacacione->sub_total !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>


<!-- total3vacacionesfuturo field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('total3vacacionesfuturo', 'Total') !!}
    {!! $cliente->total3vacacionesfuturo !!}
</div>

<!-- promedio_anual field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('promedio_anual', 'Promedio Anual') !!}
    {!! $cliente->promedio_anual !!}
</div>

<!-- proyeccion10 field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('proyeccion10', 'proyeccion 10 años:') !!}
    {!! $cliente->proyeccion10 !!}
</div>


