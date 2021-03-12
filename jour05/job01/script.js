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
        if(document.getElementById("form_i").style.display == "none"){
        document.getElementById("form_i").style.display = "block";
    }});

    $("#submit").click(function(){
        $.post(
            'inscription.php',
            {
                name: $("#name").val(),
                first_name: $("#first_name").val(),
                email: $("#email").val(),
                password: $("#password").val(),
            },

            function(data){
                if (data == 'Success') {
                    $('body').html("<p>Vous êtes inscrits</p>")
                }else{
                    $('body').html("<p>Vous n'êtes pas inscrits</p>")
                }
            },

            'text'
        );
    })
    

})