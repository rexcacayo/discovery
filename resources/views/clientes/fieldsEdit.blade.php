<!-- Fecha Field -->
<div class="form-group col-sm-6">

    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::text('fecha', null, ['class' => 'form-control']) !!}
    
</div>

<!-- Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora', 'Hora:') !!}
    {!! Form::text('hora', null, ['class' => 'form-control']) !!}
    
</div>

<!-- Promotor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promotor', 'Seleccione el promotor:') !!}
    <!--{!! Form::label('promotor', '$cliente->promotor') !!}-->
    {!! Form::select('promotor', $promotores , null, ['class' => 'form-control']) !!}
</div>

<!-- Nombreinvitado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreinvitado', 'Nombre del invitado:') !!}
    {!! Form::text('nombreinvitado', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombreconyugue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombreconyugue', 'Nombre del conyugue:') !!}
    {!! Form::text('nombreconyugue', null, ['class' => 'form-control']) !!}
</div>

<!-- Edadinvitado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edadinvitado', 'Edad del invitado:') !!}
    {!! Form::text('edadinvitado', null, ['class' => 'form-control']) !!}
</div>

<!-- Edadconyugue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('edadconyugue', 'Edad del conyugue:') !!}
    {!! Form::text('edadconyugue', null, ['class' => 'form-control']) !!}
</div>

<!-- Ocupacioninvitado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ocupacioninvitado', 'Ocupacion del invitado:') !!}
    {!! Form::text('ocupacioninvitado', null, ['class' => 'form-control']) !!}
</div>

<!-- Ocupacionconyugue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ocupacionconyugue', 'Ocupacion del conyugue:') !!}
    {!! Form::text('ocupacionconyugue', null, ['class' => 'form-control']) !!}
</div>

<!-- Activoinvitado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activoinvitado', 'Activo invitado:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('activoinvitado', 0) !!}
        {!! Form::checkbox('activoinvitado', '1', null) !!} 
    </label>
</div>

<!-- Propietarioclub Field -->
<div class="form-group col-sm-6">
    {!! Form::label('propietarioclub', 'Propietario de club:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('propietarioclub', 0) !!}
        {!! Form::checkbox('propietarioclub', '1', null) !!} 
    </label>
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-12">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Field -->
<div class="form-group col-sm-12">
    {!! Form::label('pais', 'Pais:') !!}
    {!! Form::select('pais', $paises, null, ['class' => 'form-control']) !!}
    
</div>



<!-- Aceptoterm Field -->
<div class="form-group col-sm-12">
    {!! Form::label('aceptoterm', 'Acepto los terminos:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('aceptoterm', 0) !!}
        {!! Form::checkbox('aceptoterm', '1', null) !!} 
    </label>
</div>

<!-- Comentarios Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comentarios', 'Comentarios:') !!}
    {!! Form::textarea('comentarios', null, ['class' => 'form-control']) !!}
</div>

<!-- vacacionan field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('vacacionan', 'Usualmente vacacionan:') !!}
    {!! Form::select('vacacionan', ['socios' => 'Socios','familia'=>'Familia','hijos'=>'Hijos','amigos'=>'Amigos'] ,null, ['class' => 'form-control']) !!}
</div>

<!-- importancia_vacaciones field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('importancia_vacaciones', 'Que clasificación le dan a la importacia de sus vacaciones. Del 1 al 10:') !!}
    {!! Form::select('importancia_vacaciones', ['1' => '1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'] ,null, ['class' => 'form-control']) !!}
  
</div>

<!-- porque field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('porque', 'Por qué?') !!}
    {!! Form::text('porque', null, ['class' => 'form-control']) !!}
</div>

<!-- tipos_vacaciones field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tipos_vacaciones', 'Vacacionar para usted es:') !!}
    {!! Form::select('tipos_vacaciones', ['lujo' => 'Lujo','necesidad'=>'Necesidad'] ,null, ['class' => 'form-control']) !!}
</div>

<!-- porque2 field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('porque2', 'Por qué?') !!}
    {!! Form::text('porque2', null, ['class' => 'form-control']) !!}
</div>

<!-- tiempo_reserva field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tiempo_reserva', 'Con Cuánto tiempo de anticipación reserva sus vacaciones?') !!}
    {!! Form::text('tiempo_reserva', null, ['class' => 'form-control']) !!}
</div>

<!-- reserva field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('reserva', 'Reserva por:') !!}
    {!! Form::select('reserva', ['internet' => 'Internet','agencia'=>'Agencia','directo'=>'Directo'] ,null, ['class' => 'form-control']) !!}
</div>

<!-- cuanto_ano field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cuanto_ano', 'Cuántas veces al año vacionan?') !!}
    {!! Form::text('cuanto_ano', null, ['class' => 'form-control']) !!}
</div>

<!-- cuanto_noche field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cuanto_noche','Cuántas noches?') !!}
    {!! Form::text('cuanto_noche', null, ['class' => 'form-control']) !!}
</div>

<!-- ubicacion field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ubicacion', 'Donde les gusta ir?') !!}
    {!! Form::select('ubicacion', ['hotel' => 'Hotel','villas'=>'Villas','casas'=>'Casas','otro'=>'Otro'] ,null, ['class' => 'form-control']) !!}
</div>

<!-- internacional_donde field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('internacional', 'Han vacacionado internacionalmente:') !!}
    {!! Form::select('internacional', ['si' => 'Si','no'=>'No'] ,null, ['class' => 'form-control']) !!}
</div>


<!-- internacional_donde field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('internacional_donde', 'A dónde?') !!}
    {!! Form::text('internacional_donde', null, ['class' => 'form-control']) !!}
</div>

<!-- presentaciones field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('presentaciones', 'Han estado en presentaciones como esta?') !!}
    {!! Form::select('presentaciones', ['si' => 'Si','no'=>'No'] ,null, ['class' => 'form-control']) !!}
</div>

<!-- presentaciones_socio field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('presentaciones_socio', 'Es socio?') !!}
    {!! Form::select('presentaciones_socio', ['si' => 'Si','no'=>'No'] ,null, ['class' => 'form-control']) !!}
</div>

<!-- presentaciones_porque field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('presentaciones_porque', 'Por qué?') !!}
    {!! Form::text('presentaciones_porque', null, ['class' => 'form-control']) !!}
</div>

<!-- presentaciones_costo field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('presentaciones_costo', 'Costo') !!}
    {!! Form::text('presentaciones_costo', null, ['class' => 'form-control']) !!}
</div>

<!-- opinion_sisvacacionales field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('opinion_sisvacacionales', 'Qué opinión tiene de los Sistemas Vacacionales?') !!}
    {!! Form::text('opinion_sisvacacionales', null, ['class' => 'form-control']) !!}
</div>

<!-- total3vacacionesfuturo field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('total3vacacionesfuturo', 'Total') !!}
    {!! Form::text('total3vacacionesfuturo', null, ['class' => 'form-control']) !!}
</div>

<!-- promedio_anual field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('promedio_anual', 'Promedio Anual') !!}
    {!! Form::text('promedio_anual', null, ['class' => 'form-control']) !!}
</div>

<!-- proyeccion10 field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('proyeccion10', 'Promedio Anual') !!}
    {!! Form::text('proyeccion10', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clientes.index') !!}" class="btn btn-default">Cancel</a>
</div>
