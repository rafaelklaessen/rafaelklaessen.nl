// Smooth scroll
$('#site-header .nav-item a').click(function(e) {
  // Prevent normal href function
  e.preventDefault();

  // Get element to scroll to
  var scrollTo = $(this).attr('href');

  $('html, body')
    .stop()
    .animate({
      scrollTop: $(scrollTo).offset().top - 64
    }, 400);
});

// Toggle the header to is-scrolling when the user has scrolled
$(window).scroll(function() {
  var scrollTop = $(this).scrollTop();

  if (scrollTop) {
    $('#site-header').addClass('is-scrolling');
  } else {
    $('#site-header').removeClass('is-scrolling');
  }
});