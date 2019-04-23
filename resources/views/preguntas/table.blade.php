<table class="table table-responsive" id="preguntas-table">
    <thead>
        <tr>
            <th>Id Cliente</th>
        <th>Pregunta</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($preguntas as $preguntas)
        <tr>
            <td>{!! $preguntas->id_cliente !!}</td>
            <td>{!! $preguntas->pregunta !!}</td>
            <td>
                {!! Form::open(['route' => ['preguntas.destroy', $preguntas->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('preguntas.show', [$preguntas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('preguntas.edit', [$preguntas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>