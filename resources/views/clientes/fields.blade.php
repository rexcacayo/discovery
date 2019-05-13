<!-- Fecha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha', 'Fecha:') !!}
    {!! Form::date('fecha', $hoy , null, ['class' => 'form-control']) !!}
    
</div>

<!-- Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hora', 'Hora:') !!}
    {!! Form::time('hora', $date , null , ['class' => 'form-control']) !!}
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
    {!! Form::label('activoinvitado', 'Activo invitado Si/No:') !!}
    <label class="checkbox-inline">
        {!! Form::select('activoinvitado', ['Si' =>'si' , 'No' =>'no'], null, ['class' => 'form-control']) !!}
    </label>
</div>

<!-- Activoconyugue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('activoconyugue', 'Activo invitado Si/No:') !!}
    <label class="checkbox-inline">
    {!! Form::select('activoconyugue', ['Si' =>'si' , 'No' =>'no'], null, ['class' => 'form-control']) !!}
    </label>
</div>

<!-- Promotor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('promotor', 'Seleccione el promotor:') !!}
    {!! Form::select('promotor', $promotores , null, ['class' => 'form-control']) !!}
</div>



<!-- Propietarioclub Field 
<div class="form-group col-sm-6">
    {!! Form::label('propietarioclub', 'Propietario de club:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('propietarioclub', 0) !!}
        {!! Form::checkbox('propietarioclub', '1', null) !!} 
    </label>
</div>-->
<!-- propietario de un club 

<div class="form-group col-sm-12">
    <label class="">Donde?</label>
    <button type="button" class="btn btn-primary" id="agregarPC">Agregar</button>
    <div id="PC" class="containerFlexPC">
        
    </div>

</div>-->
<!-- TARJETA DE CREDITO -->

<div class="form-group col-sm-12">
    <label class="">Tarjeta de credito</label>
    <button type="button" class="btn btn-primary" id="agregarTC">Agregar</button>
    <div id="TC" class="containerFlexTC">
        
    </div>

</div>

<!-- propiedades vacacionales -->

<div class="form-group col-sm-12">
    <label class="">Propiedades vacacionales</label>
    <button type="button" class="btn btn-primary" id="agregarPV">Agregar</button>
    <div id="PV" class="containerFlexPV">
        
    </div>

</div>

<!-- INVITADOS -->

<div class="form-group col-sm-12">
    <label class="">Invitados</label>
    <button type="button" class="btn btn-primary" id="agregarIN">Agregar</button>
    <div id="IN" class="containerFlexIN">
        
    </div>

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




<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clientes.index') !!}" class="btn btn-default">Cancel</a>
</div>



