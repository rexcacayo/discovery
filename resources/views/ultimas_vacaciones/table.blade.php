<table class="table table-responsive" id="ultimasVacaciones-table">
    <thead>
        <tr>
            <th>Lugar</th>
        <th>Ano Uso</th>
        <th>Costo Noche</th>
        <th>Numero Noche</th>
        <th>Sub-Total</th>
        <th>Cliente Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ultimasVacaciones as $ultimasVacaciones)
        <tr>
            <td>{!! $ultimasVacaciones->lugar !!}</td>
            <td>{!! $ultimasVacaciones->ano_uso !!}</td>
            <td>{!! $ultimasVacaciones->costo_noche !!}</td>
            <td>{!! $ultimasVacaciones->numero_noche !!}</td>
            <td>{!! $ultimasVacaciones->sub-total !!}</td>
            <td>{!! $ultimasVacaciones->cliente_id !!}</td>
            <td>
                {!! Form::open(['route' => ['ultimasVacaciones.destroy', $ultimasVacaciones->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('ultimasVacaciones.show', [$ultimasVacaciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('ultimasVacaciones.edit', [$ultimasVacaciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>