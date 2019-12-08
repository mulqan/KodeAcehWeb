var offset = 110;

$('.navbar li a').click(function(event) {
    // event.preventDefault();
    var el = $($(this).attr('href'))[0];
    if (el) {
      $([document.documentElement, document.body]).animate({
        scrollTop: $(el).offset().top - offset,
      }, 250);
    }
});


$('[data-toggle="tooltip"]').tooltip();
