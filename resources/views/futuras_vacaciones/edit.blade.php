@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Futuras Vacaciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($futurasVacaciones, ['route' => ['futurasVacaciones.update', $futurasVacaciones->id], 'method' => 'patch']) !!}

                        @include('futuras_vacaciones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection