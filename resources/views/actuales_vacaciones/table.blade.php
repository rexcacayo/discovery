<table class="table table-responsive" id="actualesVacaciones-table">
    <thead>
        <tr>
            <th>Lugar</th>
        <th>Costo Noche</th>
        <th>Numero Noche</th>
        <th>Total</th>
        <th>Cliente Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($actualesVacaciones as $actualesVacaciones)
        <tr>
            <td>{!! $actualesVacaciones->lugar !!}</td>
            <td>{!! $actualesVacaciones->costo_noche !!}</td>
            <td>{!! $actualesVacaciones->numero_noche !!}</td>
            <td>{!! $actualesVacaciones->total !!}</td>
            <td>{!! $actualesVacaciones->cliente_id !!}</td>
            <td>
                {!! Form::open(['route' => ['actualesVacaciones.destroy', $actualesVacaciones->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('actualesVacaciones.show', [$actualesVacaciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('actualesVacaciones.edit', [$actualesVacaciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>