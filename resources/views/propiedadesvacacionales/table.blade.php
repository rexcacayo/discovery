<table class="table table-responsive" id="propiedadesvacacionales-table">
    <thead>
        <tr>
            <th>Id Cliente</th>
        <th>Pais</th>
        <th>Nombredesarrollo</th>
        <th>Fechacompra</th>
        <th>Mantenimiento</th>
        <th>Precio</th>
        <th>Comentario</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($propiedadesvacacionales as $propiedadesvacacionales)
        <tr>
            <td>{!! $propiedadesvacacionales->cliente_id !!}</td>
            <td>{!! $propiedadesvacacionales->pais !!}</td>
            <td>{!! $propiedadesvacacionales->nombredesarrollo !!}</td>
            <td>{!! $propiedadesvacacionales->fechaCompra !!}</td>
            <td>{!! $propiedadesvacacionales->mantenimiento !!}</td>
            <td>{!! $propiedadesvacacionales->precio !!}</td>
            <td>{!! $propiedadesvacacionales->comentario !!}</td>
            <td>
                {!! Form::open(['route' => ['propiedadesvacacionales.destroy', $propiedadesvacacionales->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('propiedadesvacacionales.show', [$propiedadesvacacionales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('propiedadesvacacionales.edit', [$propiedadesvacacionales->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>