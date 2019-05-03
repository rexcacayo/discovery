<table class="table table-responsive" id="futurasVacaciones-table">
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
    @foreach($futurasVacaciones as $futurasVacaciones)
        <tr>
            <td>{!! $futurasVacaciones->lugar !!}</td>
            <td>{!! $futurasVacaciones->ano_uso !!}</td>
            <td>{!! $futurasVacaciones->costo_noche !!}</td>
            <td>{!! $futurasVacaciones->numero_noche !!}</td>
            <td>{!! $futurasVacaciones->sub-total !!}</td>
            <td>{!! $futurasVacaciones->cliente_id !!}</td>
            <td>
                {!! Form::open(['route' => ['futurasVacaciones.destroy', $futurasVacaciones->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('futurasVacaciones.show', [$futurasVacaciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('futurasVacaciones.edit', [$futurasVacaciones->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>