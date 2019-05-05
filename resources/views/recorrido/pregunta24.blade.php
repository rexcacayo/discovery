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
            
            <div class="form-group col-sm-6">
                <!-- vacaciones futuras -->

                
                    <div class="form-group col-sm-12 col-lg-12">
                        FIN
                    </div>

                <!--hidden field-->
                {!! Form::hidden('id', $cliente->id , null, ['class' => 'form-control']) !!}
                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    
                    <a href="{!! url('clientes/recorrido') !!}" class="btn btn-default">Siguiente</a>

                </div>

            </div>
            
        </div>
        <div class="text-center">
        
        </div>
    </div>
@endsection

