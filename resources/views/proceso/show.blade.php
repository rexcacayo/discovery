@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Proceso
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('proceso.show_fields')
                    <a href="{{ url('/clientes/ver') }}" class="btn btn-default">Atras</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        setInterval(consultaII, 1000);
    })
</script>
@endsection