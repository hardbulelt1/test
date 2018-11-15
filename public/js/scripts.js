$(function() {
    update();
    setInterval(function() {
        update();
    }, 15000);

});

/**
 * Update
 */
function update() {
    preload();
    $.ajax({
        url: "/update",
        success: function(data){
            data = data.data;
            var table = '';
            for (let i = 0; i < data.length; i++) {
                table += makeTr(data[i]);
            }
            $('#table').html(table);
        }

    });

}

/**
 * Make str
 * @param row
 * @returns {string}
 */
function makeTr(row) {
    var a =
    "<tr>" +
        "<td>"+ row.attributes.name +"</td>"+
        "<td>"+ row.attributes.volume +"</td>"+
        "<td>"+ row.attributes.amount +"</td>"+
    "</tr>";
    return a;
}


