$(function () {
    var jqxhr = $.ajax({
        url: "http://jorgesancheznet.ddns.net/practicas/iaw/practica06/comunidades.php",
        method: "get",
        dataType: "json"
    });
    jqxhr
        .done(function (data) {
            var comunidades = data["comunidades"];
            for (var comunidad of comunidades) {
                $("#comunidad")
                    .append(
                        "<option value='" + comunidad["id_comunidad"] + "'>" +
                        comunidad["nombre"] + "</option>"
                    )
            }

        })
        .fail(function (jqXHR, textStatus) {
            console.log("error " + textStatus);
        })

    $("#comunidad").on("change", function (e) {
        $("#provincia").empty();
        $("#localidad").empty();
        jqxhr = $.ajax({
            url: "http://jorgesancheznet.ddns.net/practicas/iaw/practica06/provincias.php",
            method: "get",
            dataType: "json",
            data: {
                comunidad: $(this).val()
            }
        });
        jqxhr
            .done(function (data) {
                var provincias = data["provincias"];
                $("#provincia").append("<option disabled selected>Elija la provincia</option>");
                for (var provincia of provincias) {
                    $("#provincia")
                        .append(
                            "<option value='" + provincia["n_provincia"] + "'>" +
                            provincia["nombre"] + "</option>"
                        )
                }

            })
            .fail(function (jqXHR, textStatus) {
                console.log("error " + textStatus);
            })
    });
    $("#provincia").on("change", function (e) {
        $("#localidad").empty();
        jqxhr = $.ajax({
            url: "http://jorgesancheznet.ddns.net/practicas/iaw/practica06/localidades.php",
            method: "get",
            dataType: "json",
            data: {
                provincia: $(this).val()
            }
        });
        jqxhr
            .done(function (data) {
                $("#localidad").append("<option disabled selected>Elija la localidad</option>");
                var localidades = data["localidades"];
                for (var localidad of localidades) {
                    $("#localidad")
                        .append(
                            "<option value='" + localidad["id_localidad"] + "'>" +
                            localidad["nombre"] + "</option>"
                        )
                }

            })
            .fail(function (jqXHR, textStatus) {
                console.log("error " + textStatus);
            })
    });
})