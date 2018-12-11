$(function(e){
    $("#validar").on("click",function(e){
        var nif=$("#nif").val();
        var jqxhr=$.ajax({
            url:"http://jorgesanchez.net/servicios/validarNIF.php",
            data: {
                nif:nif
            },
            method:"get",
            dataType:"json"
        });
        jqxhr.done(function(data){
            if(data["error"]["codigo"]===0){
                $("#mensaje").empty().append("<p class='text-success'>DNI válido</p>");


            }
            else{
                $("#mensaje").empty().append(
                    "<p class='text-danger'>DNI inválido</p>"
                );
            }
        }).fail(function(error){
            console.log(error);
            $("#mensaje").append(
                "<p class='text-danger'>No se puede alcanzar el servicio de validación</p>"
            );
        })
    });
    $("#votar")
})