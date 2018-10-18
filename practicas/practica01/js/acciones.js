$(function (e) {
    $("main>div")
        .on("mouseover",function(e){
            $("header h1").text($(this).data("texto"));
        })
        .on("click",function(e){
            location=$(this).data("url");
        })
});

