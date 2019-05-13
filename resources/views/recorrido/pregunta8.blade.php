@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Linier</h1>
        
    </section>
    <div class="content">
        <div class="clearfix"></div>
        <h1>Grupo Familiar: {!! $cliente->nombreinvitado !!}</h1>
        

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
            {!! Form::open(['url' => 'clientes/form9']) !!}
            <div class="form-group col-lg-12">
               <!-- tiempo_reserva field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('tiempo_reserva', 'Con Cuánto tiempo de anticipación reserva sus vacaciones?') !!}
                    
                    
                    <input width="400" type="range" min="1" max="15" name="tiempo_reserva" value="1" onchange="show_value(this.value);">
                    <span id="slider_value"> </span> días
                <!--hidden field-->
                {!! Form::hidden('id', $cliente->id , null, ['class' => 'form-control']) !!}
                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Siguiente', ['class' => 'btn btn-primary']) !!}
                    <a href="{!! url('clientes/recorrido') !!}" class="btn btn-default">Atrás</a>
                </div>

            </div>
            {!! Form::close() !!}
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection
@section('scripts')
<script>
    function show_value(x)
{
 document.getElementById("slider_value").innerHTML=x;
}
</script>
@endsection
