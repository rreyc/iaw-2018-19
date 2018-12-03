$(function(e){
    $("#boton").on("click",function(e){
        console.log($("#n").val());
        e.preventDefault();
        var jqxhr=$.ajax({
            "url":"loteria.php",
            "method":"get",
            "dataType":"json",
            "data":{
                "n":$("#n").val()
            }
        });
        jqxhr.done(function(data){
            var combinaciones=data["combinaciones"];
            $("#resultado").empty();
            let i=1;
            for(let combinacion of combinaciones){
                $("#resultado").append(`<h2>Combinación ${i}</h2><p>`);
                for(let n of combinacion){
                    $("#resultado").append(`<span class="badge badge-pill badge-dark">${n}</span> `);
                }
                $("#resultado").append("</p>");
                i++;
            }
        })


    })
})