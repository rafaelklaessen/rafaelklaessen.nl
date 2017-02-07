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
      // Get roles
      var roles = data.roles.toString();
      roles = roles.replace(/,/g, ', ')
      
      // Get technologies
      var technologies = data.technologies.toString();
      technologies = technologies.replace(/,/g, ', ')

      // Remove https://, http:// and www. from the link
      var link = data.link;
      link = link.replace('https://', '').replace('http://', '').replace('www.', '');

      // Get screenshot HTML 
      var screenshotsHtml = '';
      // Loop through screenshot array and generate HTML for each one.
      // The HTML will be appended to screenshotsHtml.
      for (var i = 0; i < data.screenshots.length; i++) {
        screenshotsHtml += '<img class="screenshot" src="' + data.screenshots[i] + '" alt="Screenshots">';
      }

      // Render work item
      var workItem = $('<section id="' + data.id + '" class="work-item-uncollapsed page-section" style="color: ' + data.colors[0] + '; background-color:' + data.colors[2] + '">' + 
          '<header class="work-item-header" style="background-color:' + data.colors[1] + '">' +
            '<div class="container">' + 
              '<h1 class="work-item-title section-title">' + data.name + '</h1>' + 
              '<p class="work-item-description section-text">' + data.description + '</p>' + 
              '<div class="work-item-roles work-item-field"><span class="roles-title title">Role: </span>' + roles + '</div>' +
              '<div class="work-item-technologies work-item-field"><span class="technologies-title title">Technologies used: </span>' + technologies + '</div>' +
              '<div class="work-item-link work-item-field"><span class="link-title title">Link: </span><a href="' + data.link + '" target="_blank">' + link + '</a></div>' +
            '</div>' +
          '</header>' +
          '<div class="container">' +
            '<section class="screenshot-container">' +
              screenshotsHtml +
            '</section>' + 
          '</div>' +
        '</section');
      
      // Append work item to body
      workItem.appendTo('body')
      
      // Disable scroll in body
      $('body').css({'overflow-y': 'hidden'});

      // After a little delay, add the activated class to the work-item-header
      // for the animation. Also loop through screenshots and add the
      // activated class to each one for the animation a bit later (after the 
      // header animations are done).
      setTimeout(function() {
        workItem.find('.work-item-header').addClass('activated');
      
        setTimeout(function() {
          workItem.find('.screenshot').each(function(i) {
            setTimeout(function() {
              $('.screenshot').eq(i).addClass('activated');
            }, i * 300);
          });
        }), 1000;
      }, 100);
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