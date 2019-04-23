<table class="table table-responsive" id="paises-table">
    <thead>
        <tr>
            <th>Value</th>
        <th>Letras</th>
        <th>Pais</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($paises as $paises)
        <tr>
            <td>{!! $paises->value !!}</td>
            <td>{!! $paises->letras !!}</td>
            <td>{!! $paises->pais !!}</td>
            <td>
                {!! Form::open(['route' => ['paises.destroy', $paises->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('paises.show', [$paises->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('paises.edit', [$paises->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>