$(function(e){
    var xml;
    $.ajax({
        method:"GET",
        url:"http://jorgesanchez.net/practicas/iaw/practica05/elecciones.xml"
    }).done(function(data){
        xml=data;
        var elecciones=$(xml).find("eleccion");
        elecciones.each(function(indice,valor){
            var tipo=$(valor).attr("tipo");;
            $("#tipo").append("<option value='"+tipo+"'>"+tipo+"</option>");
        })
    });


    $("#tipo").on("change",function(){
        var tipo=$(this).val();
        var eleccion=$(xml).find("eleccion[tipo='"+tipo+"']");
        var votacion=eleccion.find("votacion");
        $("#fecha").empty();
        $("#fecha").append("<option disabled selected>ELIJA LA FECHA</option>")
        votacion.each(function(k,valor){
            var texto=$(valor).find("texto").text();
            var clave=$(valor).find("clave").text();
            $("#fecha").append("<option value='"+clave+"'>"+texto+"</option>")
        })
    });



})