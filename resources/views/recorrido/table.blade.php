<table class="table table-responsive" id="clientes-table">
    <thead>
        <tr>
        <th>N#</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Grupo Familiar</th>
        
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
            
            <td>
                
                <div class='btn-group'>
                    <a href="{!! url('clientes/form3', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                </div>
                
            </td>
        </tr>
    @endforeach
    </tbody>
</table>