@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tarjetacredito
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tarjetacredito, ['route' => ['tarjetacreditos.update', $tarjetacredito->id], 'method' => 'patch']) !!}

                        @include('tarjetacreditos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection