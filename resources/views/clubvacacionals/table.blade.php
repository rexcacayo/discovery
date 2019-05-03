<table class="table table-responsive" id="clubvacacionals-table">
    <thead>
        <tr>
            <th>Id Cliente</th>
        <th>Nombreclub</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clubvacacionals as $clubvacacional)
        <tr>
            <td>{!! $clubvacacional->cliente_id !!}</td>
            <td>{!! $clubvacacional->nombreclub !!}</td>
            <td>
                {!! Form::open(['route' => ['clubvacacionals.destroy', $clubvacacional->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clubvacacionals.show', [$clubvacacional->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clubvacacionals.edit', [$clubvacacional->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>