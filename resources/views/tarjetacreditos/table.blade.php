<table class="table table-responsive" id="tarjetacreditos-table">
    <thead>
        <tr>
            <th>Tipo</th>
        <th>Marca</th>
        <th>Numero</th>
        <th>Id Cliente</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tarjetacreditos as $tarjetacredito)
        <tr>
            <td>{!! $tarjetacredito->tipo !!}</td>
            <td>{!! $tarjetacredito->marca !!}</td>
            <td>{!! $tarjetacredito->numero !!}</td>
            <td>{!! $tarjetacredito->cliente_id !!}</td>
            <td>
                {!! Form::open(['route' => ['tarjetacreditos.destroy', $tarjetacredito->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tarjetacreditos.show', [$tarjetacredito->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tarjetacreditos.edit', [$tarjetacredito->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>