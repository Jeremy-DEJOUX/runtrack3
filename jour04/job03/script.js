$(document).ready(function() {
    $('.submit').submit(function() {
        var form = $(this).serializeArray();

        $.ajax({
            url : 'pokemon.json',
            method : 'post',
            dataType : 'json',
            data : form,
            success : (date) => {
                let filter = date.filter(function (i){
                    if((form[0].value.length && i.id !== parseInt(form[0].value)))
                    {
                        return false;
                    }
                    if(form[1].value.length && !Object.values(i.name).includes(form[1].value))
                    {
                        return false;
                    }
                    if(!Object.values(i.type).includes(form[2].value))
                    {
                        return false;
                    }
                    return true;
                });

                appendFilter(filter)

            },
        });
        return false;
    })
});
function appendFilter(filter) {
    let table = $('<table></table>');
    let head = $('<thead></thead>');
    let td = $('<td></td>');
    let body = $('<tbody></tbody>');
    head.append(td)
    table.append(head);
    table.append(body)
    $("body .content").html(table)
    let tr = "";
    filter.forEach(function (object) {
         tr += "<tr>" +
            "<td>" +
            object.id +
        "</td>"   +
        "<td>" +
        getValueByObject(object.name) +
        "</td>" +
            "<td>" +
            getValueByArray(object.type) +
            "</td>" +
            "<td>" +
            getValueByObject(object.base) +
            "</td>" +
        "</tr>";

    });
    $('table tbody').html(tr);
}
function getValueByObject(object) {
    let output = '';
    let array = Object.entries(object);
    array.forEach((value) => {
        output += value[0] +" : "+ value[1]
    });
    return output;
}
function getValueByArray(array) {
    let output = '';
    array.forEach(function(value)  {
        output += value
    });
    return output;
}