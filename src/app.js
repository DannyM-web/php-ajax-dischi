// document.addEventListener("DOMContentLoaded", function(){
//
//   console.log("Hello world i'm working");
//
// });

$( document ).ready(function() {
const Handlebars = require("handlebars");


   $.ajax({
    url:'api.php',
    method: 'GET',
    success: function(data) {

      const source = $('#entry-template').html();
      const template = Handlebars.compile(source);

      for (var i = 0; i < data.length; i++) {
        console.log(data[i]);
        var album = data[i];
        var context = {
          poster: album.poster,
          title: album.title,
          author: album.author,
          year: album.year
        }

        var html = template(context);
        $('.cds-container container').append(html);

      }
    },
    error: function (error) {
      console.log("errore!");
    }

  });



});
