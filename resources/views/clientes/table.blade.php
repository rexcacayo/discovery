<table class="table table-responsive" id="clientes-table">
    <thead>
        <tr>
            <th>Fecha</th>
        <th>Hora</th>
        <th>Promotor Id</th>
        <th>Nombreinvitado</th>
        <th>Nombreconyugue</th>
        <th>Edadinvitado</th>
        <th>Edadconyugue</th>
        <th>Ocupacioninvitado</th>
        <th>Ocupacionconyugue</th>
        <th>Activoinvitado</th>
        <th>Direccion</th>
        <th>Pais</th>
        <th>Propietarioclub</th>
        <th>Aceptoterm</th>
        <th>Comentarios</th>
        <th>Tarjetas Id</th>
        <th>Invitados Id</th>
        <th>Clubvacacionales Id</th>
        <th>Propiedadesvacacionales Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <td>{!! $cliente->fecha !!}</td>
            <td>{!! $cliente->hora !!}</td>
            <td></td>
            <td>{!! $cliente->nombreinvitado !!}</td>
            <td>{!! $cliente->nombreconyugue !!}</td>
            <td>{!! $cliente->edadinvitado !!}</td>
            <td>{!! $cliente->edadconyugue !!}</td>
            <td>{!! $cliente->ocupacioninvitado !!}</td>
            <td>{!! $cliente->ocupacionconyugue !!}</td>
            <td>{!! $cliente->activoinvitado !!}</td>
            <td>{!! $cliente->direccion !!}</td>
            <td>{!! $cliente->pais !!}</td>
            <td>{!! $cliente->propietarioclub !!}</td>
            <td>{!! $cliente->aceptoterm !!}</td>
            <td>{!! $cliente->comentarios !!}</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clientes.show', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clientes.edit', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>