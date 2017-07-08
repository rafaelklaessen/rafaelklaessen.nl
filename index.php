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
              <a href="#about">About</a>
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
        <h1 class="site-title section-title">Hi, I'm Rafael</h1>
        <p class="site-subtext section-text">I'm a 15 y/o webdeveloper, based in the Netherlands.</p>
      </div>
    </section>

    <section id="work" class="work page-section">
      <div class="container">
        <h1 class="section-title">
          What I've made
        </h1>
        <section class="work-item-container">
          <article id="agoravm" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/agoravm.png')"></figure>
            <h4 class="work-title">AgoraVM</h4>
          </article>
          <article id="keep-clone" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/keep-clone.png')"></figure>
            <h4 class="work-title">Keep Clone</h4>
          </article>
          <article id="pin" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/pin.png')"></figure>
            <h4 class="work-title">Project Internet Nation</h4>
          </article>
          <article id="noodlesearching" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/noodlesearching.png')"></figure>
            <h4 class="work-title">NoodleSearching</h4>
          </article>
          <article id="valeur" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/valeur.png')"></figure>
            <h4 class="work-title">Valeur Psychologie</h4>
          </article>
          <article id="roeland" class="work-item">
            <figure class="work-preview" style="background-image: url('images/work/roeland.png')"></figure>
            <h4 class="work-title">Roeland Ruijsch Songwriting Studio</h4>
          </article>
        </section>
        <p class="github-link">
          By the way, if you're a developer, you might be interested in my <a class="normal-link" href="https://github.com/rafaelklaessen/" target="_blank">GitHub</a>.
        </p>
      </div>
    </section>

    <section id="about" class="about page-section">
      <div class="container">
        <h1 class="section-title">
          <div class="title-topline">But,</div>
          I'm constantly learning and improving
        </h1>
        <div class="about-text">
          <p class="section-text">
            And I love to do so. It's what I'm passionate about. Therefore, most of the time you'll find me programming stuff or learning new languages/frameworks/technologies. Creating stuff and programming with others are things I really enjoy as well, which is why I share most of my projects on my GitHub.
          </p>
          <p class="section-text">
            I live in Roermond, The Netherlands. I program at school as well, since my school motivates me to what I like. However, I'm not only learning programming related stuff; I'm also learning about, for example, working in a scrum team.
          </p>
        </div>
      </div>
    </section>

    <section id="skills" class="skills page-section">
      <div class="container">
        <h1 class="section-title">
          Technologies that I'm familiar with
        </h1>
        <ul class="skill-item-container">
          <li class="skill-item" data-skill="html5">
            <img class="skill-image" src="images/skills/html5.png" alt="HTML5 logo">
            <h4 class="skill-title">HTML5</h4>
          </li>
          <li class="skill-item" data-skill="sass">
            <img class="skill-image" src="images/skills/sass.png" alt="Sass logo">
            <h4 class="skill-title">Sass</h4>
          </li>
          <li class="skill-item" data-skill="javascript">
            <img class="skill-image" src="images/skills/javascript.png" alt="JavaScript logo">
            <h4 class="skill-title">JavaScript (ES6)</h4>
          </li>
          <li class="skill-item" data-skill="scala">
            <img class="skill-image" src="images/skills/scala.png" alt="Scala logo">
            <h4 class="skill-title">Scala</h4>
          </li>
          <li class="skill-item" data-skill="phoenix">
            <img class="skill-image" src="images/skills/phoenix.png" alt="Phoenix Framework logo">
            <h4 class="skill-title">Phoenix Framework</h4>
          </li>
          <li class="skill-item" data-skill="golang">
            <img class="skill-image" src="images/skills/golang.png" alt="Go (Golang) logo">
            <h4 class="skill-title">Go (Golang)</h4>
          </li>
          <li class="skill-item" data-skill="php">
            <img class="skill-image" src="images/skills/php.png" alt="PHP logo">
            <h4 class="skill-title">PHP</h4>
          </li>
        </ul>
      </div>
      <img class="code-preview" data-current-skill="javascript" src="images/skills/code/javascript.jpg" alt="Code preview">
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
