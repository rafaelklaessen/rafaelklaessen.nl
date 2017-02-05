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

// Toggle the header to is-scrolling when the user has scrolled.
// We'll use the checkScroll function for that.
$(window).scroll(function() {
  checkScroll();
});

function checkScroll() {
  var scrollTop = $(window).scrollTop();

  if (scrollTop) {
    $('#site-header').addClass('is-scrolling');
  } else {
    $('#site-header').removeClass('is-scrolling');
  }
}

// Call the checkScroll function normally aswell, as the user might have
// refreshed the page while not being at the top.
checkScroll();

// Open work items
$('#work .work-item').click(function() {
  // Get item ID
  var itemId = $(this).attr('id');
  
  // Load JSON file based on ID
  $.getJSON('work/' + itemId + '.json', {})
    .done(function(data) {
      console.log(data);
    });
});

// Send contact form with AJAX
$('#contact .contact-form').submit(function(e) {
  e.preventDefault();
  var url = $(this).attr('action');
  $.post(url, $(this).serialize(), function(data) {
    // Clear all errors
    $('#contact .contact-form .form-group .form-field').removeClass('error');
    $('#contact .contact-form .form-group .form-error').text('');
    
    if (data == 'success') {
      // Show success message
      $('#contact .success-message').slideDown(400);
      $('#contact .contact-form').slideUp(400);
    } else {
      // Parse response
      data = JSON.parse(data)

      // Loop through errors
      for (var i in data) {
        // Get form group by key i from data
        var formGroup = $('#contact .contact-form .' + i.replace('Err', '') + '-form-group'),
            // Form input or textarea
            formField = formGroup.find('.form-field'),
            // Error field
            errField = formGroup.find('.form-error');
        formField.addClass('error');
        errField.text(data[i]);
      }
    }
  });
});