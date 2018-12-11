$(function(e){
    $("#borrar").on("click",function(e){
        var jqxhr=$.ajax({
            "url":"borrar.php",
            "method":"post"
        });
        jqxhr.done(function(data){
            $("#resultado").empty();
        })
    })
})