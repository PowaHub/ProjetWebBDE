jQuery(document).ready(function(){

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

});