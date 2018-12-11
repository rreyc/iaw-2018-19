$(function(e){
    $("#boton").on("click",function(e){
        e.preventDefault();
        if($("#tarea").val().trim().length>0){
            var tarea=$("#tarea").val();
            var jqxhr=$.ajax({
                "url":"anadir.php",
                "method":"post",
                "data":{
                    "tarea":tarea
                }
            });
            jqxhr.done(function(data){
                $("#lista").append(`<li>${tarea}</li>`);
                $("#tarea").val("");
                $("#tarea").focus();
                $("#borrar").show();
            })
        }
    })
    $("body").on("click","#borrar",function(e){
        var jqxhr=$.ajax({
            "url":"borrar.php",
            "method":"post"
        });
        jqxhr.done(function(data){
            $("#lista").empty();
            $("#borrar").hide();
            $("#tarea").focus();
        })
    })
})