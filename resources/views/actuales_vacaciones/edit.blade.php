@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Actuales Vacaciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($actualesVacaciones, ['route' => ['actualesVacaciones.update', $actualesVacaciones->id], 'method' => 'patch']) !!}

                        @include('actuales_vacaciones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection