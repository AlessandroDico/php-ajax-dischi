$(document).ready(function(){
    // console.log('ciao');

    const Handlebars = require("handlebars");

    var source = $("#entry-template").html();

    //questa var template è una funzione
    var template = Handlebars.compile(source);

    // chiamata ajax
    $.ajax({
        // url: "../forAjaXIndex/disc.php",
        url: "../forAllDisc.php",
        method: "GET",
        success: function(data) {
            // console.log('ok');
            // console.log(data);

            data.forEach((item, i) => {
                // console.log(item.title);
                // console.log(item.author);
                // console.log(item.year);

//ora assegnamo alle chiavi che sono nel template dell'html {{chive}} il valore corrispondente e li salviamo in una variabile
                var context = {
                    poster: item.poster,
                    titolo: item.title,
                    autore: item.author,
                    anno: item.year
                };
                //ora gli diciamo di crearci l'html con le chiavi sostitute dal loro valore
                var html = template(context);

                //appendiamo in pagina il template modificato
                $('.card-container').append(html);
            });

        },
        error: function() {
            console.log('errore');
        }
    })

    // al cambio dell option cambio qualcosa
    // al cambio della option faccio una chiamata ajax

    $('.genre-select').change(function() {

        console.log($(this).val());
        var curentGenre = $(this).val();

        $.ajax({
            url: "../forAllDisc.php",
            method: 'GET',
            data: {
                'genre': curentGenre,
            },
            success: function(data){
                console.log(data);
            },
            error: function(){
                console.log('errore');
            },
        });
    });
});
