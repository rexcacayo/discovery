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
            {!! Form::open(['url' => 'clientes/form5']) !!}
            <div class="form-group col-sm-6">
                <!-- importancia_vacaciones field -->
                    <div class="form-group col-sm-12 col-lg-12">
                        {!! Form::label('importancia_vacaciones', 'Que clasificación le dan a la importacia de sus vacaciones. Del 1 al 10:') !!}
                        {!! Form::select('importancia_vacaciones', ['1' => '1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'] ,null, ['class' => 'form-control']) !!}
                    </div>   
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

