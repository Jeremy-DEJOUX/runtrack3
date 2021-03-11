$(document).ready(function(){

    $("#button").click(function () {
        $.ajax({
            url: "expression.txt",
            method: "GET",
            DataType: "text"
        })
            .done(function(msg){
                console.log(msg);
                $("body").append("<p>"+msg+"</p>")
            })
    });
    
});