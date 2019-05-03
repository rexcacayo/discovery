<table class="table table-responsive" id="invitados-table">
    <thead>
        <tr>
            <th>Id Cliente</th>
        <th>Nombreinvitado</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($invitados as $invitados)
        <tr>
            <td>{!! $invitados->cliente_id !!}</td>
            <td>{!! $invitados->nombreinvitado !!}</td>
            <td>
                {!! Form::open(['route' => ['invitados.destroy', $invitados->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('invitados.show', [$invitados->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('invitados.edit', [$invitados->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>