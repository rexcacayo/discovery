<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $preguntas->id !!}</p>
</div>

<!-- Id Cliente Field -->
<div class="form-group">
    {!! Form::label('cliente_id', 'Id Cliente:') !!}
    <p>{!! $preguntas->cliente_id !!}</p>
</div>

<!-- Pregunta Field -->
<div class="form-group">
    {!! Form::label('pregunta', 'Pregunta:') !!}
    <p>{!! $preguntas->pregunta !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $preguntas->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $preguntas->updated_at !!}</p>
</div>

