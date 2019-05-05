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
            {!! Form::open(['url' => 'clientes/form7']) !!}
            <div class="form-group col-sm-6">
               <!-- porque field -->
                <div class="form-group col-sm-12 col-lg-12">
                    {!! Form::label('tipos_vacaciones', 'Vacacionar para usted es:') !!}
                    {!! Form::select('tipos_vacaciones', ['lujo' => 'Lujo','necesidad'=>'Necesidad'] ,null, ['class' => 'form-control']) !!}                
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

