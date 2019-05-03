<table class="table table-responsive" id="clientes-table">
    <thead>
        <tr>
        <th>N#</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Nombreinvitado</th>
        <th>Nombreconyugue</th>
        <th>Pais</th>
        <th>Promotor</th>

        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <td>{!! $cliente->id !!}</td> 
            <td>{!! $cliente->fecha !!}</td>
            <td>{!! $cliente->hora !!}</td>
            <td>{!! $cliente->nombreinvitado !!}</td>
            <td>{!! $cliente->nombreconyugue !!}</td>
            <td>{!! $cliente->pais !!}</td>
            <td>{!! $cliente->promotor !!}</td>
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