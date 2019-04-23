$(document).ready(function(){
    $('#agregarTC').click(function(){
        var inicio = '<div class="tarjeta">'
        var numero =  'Número tarjeta: <input type="text" name="numeroTarjeta[]" >';
        var marca = 'Clase tarjeta: <select name="marcaTarjeta[]><option value="local">Local</option><option value="oro">Oro</option><option value="platinum">Platinum</option><option value="black">Black</option></select>';
        var tipo = 'Tipo tarjeta: <select name="tipoTarjeta[]><option value="visa">Visa</option><option value="master">Master</option><option value="america_express">American Express</option></select>';
        var fin = '</div>';
        $('#TC').append(inicio,numero, marca, tipo, fin);
    })
})


$(document).ready(function(){
    $('#agregarIN').click(function(){
        var inicio = '<div class="invitado">'
        var nombre =  'Nombre Invitado: <input type="text" name="nombreInvitado[]" class="form-control" >';
        var fin = '</div>';
        $('#IN').append(inicio,nombre, fin);
    })
})

$(document).ready(function(){
    $('#agregarPC').click(function(){
        var inicio = '<div class="invitado">'
        var nombre =  'Donde?: <input type="text" name="donde[]" class="form-control" >';
        var fin = '</div>';
        $('#PC').append(inicio,nombre, fin);
    })
})


$(document).ready(function(){
    $('#agregarPV').click(function(){
        var inicio = '<div class="vacacionales">'
        var pais=  'País: <input type="text" name="paisVacacionales[]" class="form-control" >';
        var desarrollo = 'Nombre del desarrollo: <input type="text" name="nombreDesarrollo[]" class="form-control" >';
        var fechaCompra = 'Nombre del desarrollo: <input type="text" name="fechaCompra[]" class="form-control" >';
        var precio = 'Precio del desarrollo: <input type="text" name="precio[]" class="form-control" >';
        var mantenimiento = 'Mantenimiento: <input type="text" name="mantenimiento[]" class="form-control" >';
        var comentario = 'Comentario: <input type="text" name="coemntario[]" class="form-control" >'
        var fin = '</div>';
        $('#PV').append(inicio,pais,desarrollo,fechaCompra,precio,mantenimiento,comentario,fin);
    })
})

$(document).ready(function(){
    $('#agregarPR').click(function(){
        var inicio = '<div class="pregunta">'
        var pregunta =  'Pregunta: <input type="text" name="pregunta[]" class="form-control" >';
        var fin = '</div>';
        $('#PR').append(inicio,pregunta, fin);
    })
})