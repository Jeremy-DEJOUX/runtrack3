    function jsonValueKey(json, key) {
    let platform = JSON.parse(json);
    console.log(platform[key]);
    return platform[key];
}
    var json = '{"name":"La Plateforme_", "address":"8 rue d hozier", "city": "Marseille", "nb_staff":"11", "creation":"2019"}'; 
    jsonValueKey(json, 'city');