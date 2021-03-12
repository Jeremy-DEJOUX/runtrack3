$(document).ready(function (){

    $("#connexion").click(function () {
        $.ajax({
            url: "connexion.php",
            method: "GET",
            data: "form",
            DataType: "html"
        })
            .done(function(msg){
                $("form").hide()
                $("body").append(msg)
            })
    });

    $("#inscription").click(function () {
        $.ajax({
            url: "inscription.php",
            method: "GET",
            data: "form",
            DataType: "html"
        })
            .done(function(msg){
                $("form").hide()
                $("body").append(msg)
            })
    });

})