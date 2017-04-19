jQuery(document).ready(function(){
/*
$( function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme",
      "Google",
      "bonjour",
      "salut",
      "coucou"
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );
*/

/*
$(window).scroll(function () {
          var rupture = $('body').outerHeight() ;
          if( $(window).scrollTop() > rupture ) {
               $('.panier').addClass('fixed');
          } else {
               $('.panier').removeClass('fixed');
          }
     });
*/

// pour les boutons s'inscrire
$(function () {
    // définition de la boîte de dialogue
    // la méthode jQuery dialog() permet de transformer un div en boîte de dialogue et de définir ses boutons
    $( "#popupinformation" ).dialog({
        autoOpen: false,
        width: 400,
        buttons: [
            {
                text: "OK",
                click: function() {
                    $( this ).dialog( "close" );
                    var text = "";
                    $("#textarea").val(text);
                }
            }
        ]
    });
 
    // comportement du bouton devant ouvrir la boîte de dialogue
    $( "#popupinscription" ).click(function( event ) {
        // cette ligne est très importante pour empêcher les liens ou les boutons de rediriger
        // vers une autre page avant que l'usager ait cliqué dans le popup
        event.preventDefault();
        // affichage du popup
        $( "#popupinformation" ).dialog( "open" );
    });
});



// pour les boutons supprimer
$(function () {
    // définition de la boîte de dialogue
    // la méthode jQuery dialog() permet de transformer un div en boîte de dialogue et de définir ses boutons
    $(".popupconfirmation").dialog( {
        autoOpen: false,
        width: 400
    });
 
    // comportement du bouton devant ouvrir la boîte de dialogue
    $(".suppr").click(function(event) {
        // cette ligne est très importante pour empêcher les liens ou les boutons de rediriger
        // vers une autre page avant que l'usager ait cliqué dans le popup
        event.preventDefault();
        // retrouve l'attribut href du lien sur lequel on a cliqué
        var targetUrl = $(this).attr("href");

        // on définit les boutons ici plutôt que plus haut puisqu'on a besoin de connaître l'URL de la page, qui n'était pas encore disponible sur le document.ready.
        $(".popupconfirmation").dialog({
            buttons: [
                {  
                    text: "Oui",    
                    click: function () {
                        window.location.href = targetUrl; 
                    }
                },
                {
                    text: "Non",
                    click: function () {
                        $(this).dialog("close");
                    }
                }
            ]
        });
 
        // affichage du popup
        $(".popupconfirmation").dialog("open");
    });
}); 





});