<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Rafael Klaessen</title>
    <meta charset="UTF-8">

    <meta name="description" content="Hi, I'm Rafael Klaessen and this is my website! Click the link for more info about me.">
    <meta name="keywords" content="Rafael Klaessen, Rafael, Klaessen, webdevelopment, webdesign, nederland webdevelopment, nederland webdesign, website bouwen, website laten maken">
    <meta name="author" content="Rafael Klaessen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <!--Og data-->
    <meta property="og:url" content="https://www.rafaelklaessen.nl">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Rafael Klaessen">
    <meta property="og:description" content="Hi, I'm Rafael Klaessen and this is my website!">
    <meta property="og:image" content="https://www.rafaelklaessen.nl/images/back.jpg">
    <!--Twitter card-->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="https://www.rafaelklaessen.nl/">
    <meta name="twitter:creator" content="@ra_ca02">
    <meta name="twitter:title" content="rafaelklaessen.nl">
    <meta name="twitter:description" content="Hi, I'm Rafael Klaessen and this is my website!">
    <meta name="twitter:image" content="https://www.rafaelklaessen.nl/images/icons/favicon.png">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

  </head>
  <body>
    <header id="site-header" class="site-header">
      <div class="container">
        <nav class="nav" role="navigation">
          <ul class="nav-items">
            <li class="nav-item">
              <a href="#site-intro">Home</a>
            </li>
            <li class="nav-item">
              <a href="#work">Work</a>
            </li>
            <li class="nav-item">
              <a href="#skills">Skills</a>
            </li>
            <li class="nav-item">
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </nav>
        <div id="menu-btn" class="menu-btn material-icons">menu</div>
      </div>
    </header>

    <section id="site-intro" class="site-intro page-section">
      <div class="container">
        <h1 class="site-title section-title">Rafael Klaessen</h1>
        <p class="site-subtext section-text">I'm a full-stack webdeveloper from the Netherlands. You can find some of my work below.</p>
      </div>
    </section>

    <section id="work" class="work page-section">
      <div class="container">
        <section class="work-item-container">
          <article id="progressmonitor" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/progressmonitor.png');"></figure>
            <h4 class="work-title">ProgressMonitor</h4>
          </article>
          <article id="didback" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/didback.svg'); background-size: 25%;"></figure>
            <h4 class="work-title">Didback</h4>
          </article>
          <article id="dojo-ibl" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/dojo-ibl.png');"></figure>
            <h4 class="work-title">Dojo-IBL</h4>
          </article>
          <article id="keep-clone" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/keep-clone.png');"></figure>
            <h4 class="work-title">Keep Clone</h4>
          </article>
          <article id="valeur" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/valeur.png');"></figure>
            <h4 class="work-title">Valeur Psychologie</h4>
          </article>
          <article id="roeland" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/roeland.png');"></figure>
            <h4 class="work-title">Roeland Ruijsch Songwriting Studio</h4>
          </article>
        </section>
      </div>
    </section>

    <section id="open-source" class="open-source page-section">
      <div class="container">
        I actively work on open source projects. You can find these projects on my <a class="normal-link" href="https://github.com/rafaelklaessen/" target="_blank">GitHub profile</a>.
      </div>
    </section>

    <section id="contact" class="contact page-section">
      <div class="container">
        <h1 class="section-title">
          Interested in me or my work?
        </h1>
        <p class="section-text">
          Or just want to say hi? You can hit me up at <a class="normal-link" href="mailto:rafael@rafaelklaessen.nl">rafael@rafaelklaessen.nl</a> or you can use the form below.
          Of course, you can also connect with me via social media.
        </p>
        <section class="contact-form-container">
          <form id="contact-form" class="contact-form" action="mail.php" method="post">
            <div class="name-form-group form-group">
              <label class="name-label form-label" for="name">Name:</label>
              <input id="name" class="form-field form-input" name="name" type="text">
              <div class="name-error form-error"></div>
            </div>
            <div class="email-form-group form-group">
              <label class="email-label form-label" for="email">Email:</label>
              <input id="email" class="form-field form-input" name="email" type="text">
              <div class="email-error form-error"></div>
            </div>
            <div class="subject-form-group form-group">
              <label class="subject-label form-label" for="subject">Subject:</label>
              <input id="subject" class="form-field form-input" name="subject" type="text">
              <div class="subject-error form-error"></div>
            </div>
            <div class="msg-form-group form-group">
              <label class="textarea-label form-label" for="msg">Message:</label>
              <textarea id="msg" class="form-field form-textarea" name="msg"></textarea>
              <div class="textarea-error form-error"></div>
            </div>
            <button class="submit-btn btn" type="submit">Submit</button>
          </form>
          <h2 class="success-message">Email successfully sent</h2>
        </section>
        <section class="social-media-container">
          <ul class="social-media-items">
            <li class="social-media-item">
              <a href="https://www.twitter.com/ra_ca02" target="_blank">
                <img class="social-media-icon" src="images/icons/social/twitter.png" alt="Twitter icon">
              </a>
            </li>
            <li class="social-media-item">
              <a href="https://www.github.com/rafaelklaessen" target="_blank">
                <img class="social-media-icon" src="images/icons/social/github.png" alt="GitHub icon">
              </a>
            </li>
            <li class="social-media-item">
              <a href="https://nl.linkedin.com/in/rafael-klaessen-644034107" target="_blank">
                <img class="social-media-icon" src="images/icons/social/linkedin.png" alt="LinkedIn icon">
              </a>
            </li>
            <li class="social-media-item">
              <a href="skype:ra-ca02?chat">
                <img class="social-media-icon" src="images/icons/social/skype.png" alt="Skype icon">
              </a>
            </li>
          </ul>
        </section>
      </div>
    </section>

    <footer id="site-footer" class="site-footer page-section">
      <div class="container">
        <p class="section-text">
          Built with <span class="heart">&lt;3</span> in the Netherlands - View project on <a class="normal-link" href="https://github.com/rafaelklaessen/rafaelklaessen.nl" target="_blank">GitHub</a>
        </p>
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
