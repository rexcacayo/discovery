@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Clubvacacional
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clubvacacional, ['route' => ['clubvacacionals.update', $clubvacacional->id], 'method' => 'patch']) !!}

                        @include('clubvacacionals.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection