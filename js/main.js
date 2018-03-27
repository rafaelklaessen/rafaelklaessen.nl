// Smooth scroll
$('#site-header .nav-item a').click(function(e) {
  // Prevent normal href function
  e.preventDefault();

  // Get element to scroll to
  var scrollTo = $(this).attr('href');

  // Scroll to it
  $('html, body')
    .stop()
    .animate({
      scrollTop: $(scrollTo).offset().top - 64
    }, 400);
});

// Make sure the nav is visible when window width is higher than 768px
$(window).resize(function() {
  fixNavDisplay();
});
var $window = $(window),
    wWidth = $window.width();
setInterval(function() {
  if (wWidth != $window.width()) {
    wWidth = $window.width();
    fixNavDisplay();
  }
}, 300);

// Show nav when the window width is higher than 768px
function fixNavDisplay() {
  if ($(window).width() > 768) {
    $('#site-header .nav').stop().show();
  }
}

// Toggle mobile nav
$('#menu-btn').click(function() {
  $('#site-header .nav').stop().toggle(200);
});

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

      // Remove https://, http:// and www. from the link & GitHub link
      var link = data.link;
      var githubLink = data.githubLink;

      if (githubLink instanceof Array) {
        githubLink = [];
        for (var i = 0; i < data.githubLink.length; i++) {
          githubLink[i] = data.githubLink[i];
        }
      }

      if (link) {
        link = stripUrl(link);
      }

      if (githubLink) {
        if (githubLink instanceof Array) {
          for (var i = 0; i < githubLink.length; i++) {
            githubLink[i] = stripUrl(githubLink[i]);
          }
        } else {
          githubLink = stripUrl(githubLink);
        }
      }

      // Get link and GitHub link HTML
      var linkHtml = '';
      var githubLinkHtml = '';

      if (link) {
        linkHtml = '<div class="work-item-link work-item-field"><span class="link-title title">Link: </span><a href="' + data.link + '" target="_blank">' + link + '</a></div>'
      }

      if (githubLink) {
        if (githubLink instanceof Array) {
          for (var i = 0; i < githubLink.length; i++) {
            githubLinkHtml += '<div class="work-item-link work-item-field"><span class="link-title title">GitHub link: </span><a href="' + data.githubLink[i] + '" target="_blank">' + githubLink[i] + '</a></div>'
          }
        } else {
          githubLinkHtml = '<div class="work-item-link work-item-field"><span class="link-title title">GitHub link: </span><a href="' + data.githubLink + '" target="_blank">' + githubLink + '</a></div>'
        }
      }

      // Get screenshot HTML
      var screenshotsHtml = '';
      // Loop through screenshot array and generate HTML for each one.
      // The HTML will be appended to screenshotsHtml.
      for (var i = 0; i < data.screenshots.length; i++) {
        screenshotsHtml += '<img class="screenshot" src="' + data.screenshots[i] + '" alt="Screenshots">';
      }

      // Render work item
      var workItem = $('<section id="' + data.id + '" class="work-item-uncollapsed page-section" style="color: ' + data.colors[0] + ';">' +
          '<header class="work-item-header" style="background-color:' + data.colors[1] + '">' +
            '<div class="container">' +
              '<h1 class="work-item-title section-title">' + data.name + '</h1>' +
              '<p class="work-item-description section-text">' + data.description + '</p>' +
              '<div class="work-item-roles work-item-field"><span class="roles-title title">Role: </span>' + roles + '</div>' +
              '<div class="work-item-technologies work-item-field"><span class="technologies-title title">Technologies used: </span>' + technologies + '</div>' +
              linkHtml + githubLinkHtml +
              '<div class="close-btn material-icons">close</div>' +
            '</div>' +
          '</header>' +
          '<div class="container">' +
            '<section class="screenshot-container">' +
              screenshotsHtml +
            '</section>' +
          '</div>' +
        '</section');

      // Append work item to body
      workItem.appendTo('body').fadeIn(200);

      // Disable scroll in body
      $('body').css({'overflow-y': 'hidden'});

      // After a little delay, add the activated class to the work-item-header
      // for the animation.
      setTimeout(function() {
        workItem.find('.work-item-header').addClass('activated');

        // After the header animations are partially done, do the screenshot
        // animation.
        setTimeout(function() {
          // Also loop through screenshots and add the
          // activated class to each one for the animation.
          workItem.find('.screenshot').each(function(i) {
            setTimeout(function() {
              $('.screenshot').eq(i).addClass('activated');
            }, i * 300);
          });
        }, 200);
      }, 300);

      // Add close button listener
      workItem.find('.close-btn').click(function() {
        // Animate workitem header
        workItem.find('.work-item-header').removeClass('activated');

        // After the header animations are partially done, do the screenshot
        // remove animation.
        setTimeout(function() {
          // Loop through the screenshots and remove the activated class for
          // the animation.
          workItem.find('.screenshot').each(function(i) {
            setTimeout(function() {
              $('.screenshot').eq(i).removeClass('activated');
            }, i * 300);
          });
        }, 200);

        // Fade the work-item element out after the animations are done.
        setTimeout(function() {
          workItem.fadeOut(200);

          // After the element's faded out, remove it.
          // Also re-enable scroll in body.
          setTimeout(function() {
            workItem.remove();
            $('body').css({'overflow-y': 'initial'});
          }, 200);
        }, 800);
      });
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

function stripUrl(url) {
  return url
    .replace('https://', '')
    .replace('http://', '')
    .replace('www.', '');
}
