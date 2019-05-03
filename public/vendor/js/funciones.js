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
        var fechaCompra = 'Fecha de compra: <input type="text" name="fechaCompra[]" class="form-control" >';
        var precio = 'Precio del desarrollo: <input type="text" name="precio[]" class="form-control" >';
        var mantenimiento = 'Mantenimiento: <input type="text" name="mantenimiento[]" class="form-control" >';
        var comentario = 'Comentario: <input type="text" name="comentario[]" class="form-control" >'
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

$(document).ready(function(){
    $('#agregarVacP').click(function(){
        var inicioP = '<div class="vacacionales">'
        var lugarP =  'Lugar: <input type="text" name="lugarVacacionalesP[]" class="form-control" >';
        var anoP =  'Año de Uso: <input type="text" name="anoVacacionalesP[]" class="form-control" >';
        var costoP =  'Costo por Noche: <input type="text" name="costoVacacionalesP[]" class="form-control" >';
        var numeroP = 'Número de noches: <input type="text" name="numeroVacacionalesP[]" class="form-control" >';
        var subP = 'Sub-Total: <input type="text" name="subVacacionalesP[]" class="form-control" >';
        var finP = '</div>';
        $('#VacP').append(inicioP,lugarP,anoP,costoP,numeroP,subP,finP);
    })
})

$(document).ready(function(){
    $('#agregarVacA').click(function(){
        var inicioA = '<div class="vacacionales">'
        var lugarA =  'Lugar: <input type="text" name="lugarVacacionalesA[]" class="form-control" >';
        var costoA =  'Costo por Noche: <input type="text" name="costoVacacionalesA[]" class="form-control" >';
        var numeroA = 'Número de noches: <input type="text" name="numeroVacacionalesA[]" class="form-control" >';
        var subA = 'Sub-Total: <input type="text" name="subVacacionalesA[]" class="form-control" >';
        var finA = '</div>';
        $('#VacA').append(inicioA,lugarA,costoA,numeroA,subA,finA);
    })
})

$(document).ready(function(){
    $('#agregarVacF').click(function(){
        var inicioF = '<div class="vacacionales">'
        var lugarF =  'Lugar: <input type="text" name="lugarVacacionalesF[]" class="form-control" >';
        var anoF =  'Año de Uso: <input type="text" name="anoVacacionalesF[]" class="form-control" >';
        var costoF =  'Costo por Noche: <input type="text" name="costoVacacionalesF[]" class="form-control" >';
        var numeroF = 'Número de noches: <input type="text" name="numeroVacacionalesF[]" class="form-control" >';
        var subF = 'Sub-Total: <input type="text" name="subVacacionalesF[]" class="form-control" >';
        var finF = '</div>';
        $('#VacF').append(inicioF,lugarF,anoF,costoF,numeroF,subF,finF);
    })
})
