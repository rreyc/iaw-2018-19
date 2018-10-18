$(function (e) {
    var cambios;
    var jqxhr = $.ajax({
        url: "https://jorgesanchez.net/practicas/iaw/codigosMonedas.xml",
        method: "get",
        dataType: "xml"
    });
    jqxhr.done(function (datos) {
        var xml = $(datos); //se ha cargado el nombre de las monedas
        var jqxhr2 = $.ajax({
            url: "https://jorgesanchez.net/practicas/iaw/cambio.json",
            method: "get",
            dataType: "json"
        });
        jqxhr2.done(function (datos2) {
            cambios = datos2["cambios"]; //hemos cargado los cambios
            for (var cambio of cambios) {
                var codigo = cambio["nombre"];
                var cambio = cambio["cambio"];
                //obtener el nombre de la moneda actual
                var nombre = xml.find(`[clave="${codigo}"]`).text();
                $("#a").append(
                    `<option value="${cambio}">${codigo} (${nombre})</option>`
                );
            }

        });
    });


    $("#calcular").on("click",function(){
        $("#resultado").text(
            $("#a").val()
        )
    })
});