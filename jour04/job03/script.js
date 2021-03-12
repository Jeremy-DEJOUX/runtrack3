$('#filter').on('click', function (event) {
// Requete Ajax sur pokemon.json
    $.ajax({
        url: 'pokemon.json',
        type: 'GET',
        dataType: 'json',
    }).done(function (json) {
        // Recup valeur des input et les stock dans des variables
        let pkmnID = $("#id")[0].value;
        let pkmnName = $('#nom')[0].value;
        let pkmnType = $('#type')[0].value;

        //For in parcourt mon objet Json
        for (let key in json) {
                console.log(json[key]['type'])