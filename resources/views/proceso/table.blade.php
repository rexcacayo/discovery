<table class="table table-responsive" id="clientes-table">
    <thead>
        <tr>
        <th>N#</th>
        <th>Comienzo Cuestionario</th>
        <th>Grupo Familiar</th>
        
        <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
   
        <tr>
            <td id="id"></td> 
            <td id="updated_at"></td>
            <td id="nombreinvitado"></td>
            
            <td>
                
                <div class='btn-group' id="action">
                    
                    
                </div>
                
            </td>
        </tr>
    
    </tbody>
</table>

@section('scripts')
<script>
    $(document).ready(function(){
        setInterval(consulta, 1000);
    })
</script>
@endsection