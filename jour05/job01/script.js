$(document).ready(function (){

    $("#connexion").click(function() {
        $.ajax({
            url: "connexion.php",
            method: "GET",
            data: "form",
            DataType: "html"
        })
            .done(function(connexion){
                $("form").remove()
                $("body").append(connexion)

                $("#submit").click(function(e){
                    e.preventDefault();
            
                    $.post(
                        'connexion.php',
                        {
                            email : $("#email").val(),
                            password : $("#password").val(),
                        },
            
                        function(bou){
            
                            if(bou === 'Success'){
                                // Le membre est connecté. Ajoutons lui un message dans la page HTML.
            
                                $("body").html("<p>Vous avez été connecté avec succès !</p>");
                            }
                            else{
                                // Le membre n'a pas été connecté. (data vaut ici "failed")
            
                                $("body").html("<p>Erreur lors de la connexion...</p>");
                            }
                    
                        },
                        'text'
                    );
                });
            })
    });

    $("#inscription").click(function() {
        $.ajax({
            url: "inscription.php",
            method: "GET",
            data: "form",
            DataType: "html"
        })
            .done(function(inscription){
                $("form").remove()
                $("body").append(inscription)

                $("#submit").click(function(e){
                    e.preventDefault();
            
                    $.post(
                        'inscription.php', // Un script PHP que l'on va créer juste après
                        {
                            name : $("#name").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                            first_name : $("#first_name").val(),
                            email : $("#email").val(),
                            password : $("#password").val(),
                            inscription : $("#submit").val()
                        },
            
                        function(data){
            
                            if(data === 'Success'){
                                // Le membre est connecté. Ajoutons lui un message dans la page HTML.
                                    $.ajax({
                                        url: "connexion.php",
                                        method: "GET",
                                        data: "form",
                                        DataType: "html"
                                    })
                                    .done(function(connexion){
                                            $("form").remove()
                                            $("body").append(connexion)

                                            $("#submit").click(function(def){
                                                def.preventDefault();
                                        
                                                $.post(
                                                    'connexion.php',
                                                    {
                                                        email : $("#email").val(),
                                                        password : $("#password").val(),
                                                    },
                                        
                                                    function(response){
                                        
                                                        if(response === 'Success'){
                                                            // Le membre est connecté. Ajoutons lui un message dans la page HTML.
                                        
                                                            $("body").html("<p>Vous avez été connecté avec succès !</p>");
                                                        }
                                                        else{
                                                            // Le membre n'a pas été connecté. (data vaut ici "failed")
                                        
                                                            $("body").html("<p>Erreur lors de la connexion...</p>");
                                                        }
                                                
                                                    },
                                                    'text'
                                                );
                                            });

                                    })
                            }
                            else{
                                // Le membre n'a pas été connecté. (data vaut ici "failed")
            
                                $("body").html("<p>Erreur lors de la connexion...</p>");
                            }
                    
                        },
                        'text'
                    );
                });
            })

            
    });

     
    

})