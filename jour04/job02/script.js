$(document).ready(function (){


    function jsonValuekey(json, key){
        var obj = JSON.parse(json);
        return obj[key];
    }

    var json = '{"name": "La Plateforme_", "address": "8 rue d hozier", "city": "Marseille", "nb_staff": 11, "creation":2019}';
    jsonValuekey(json, 'city');
});