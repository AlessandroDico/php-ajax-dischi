$(document).ready(function(){
    console.log('ciao');

    // var source = document.getElementById("entry-template").innerHTML;
    // var template = Handlebars.compile(source);

    // chiamata ajax
    $.ajax({
        // url: "../forAjaXIndex/index.php",
        url: "index.php",
        method: "GET",
        success: function(data) {
            console.log('ok');
            console.log(data);
        },
        error: function() {
            console.log('errore');
        }
    })
});
