<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="jasbir">
    <meta name="generator" content="vs code">
    <title>Home page</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="assets_pwa/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets_pwa/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets_pwa/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets_pwa/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets_pwa/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets_pwa/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets_pwa/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets_pwa/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets_pwa/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="assets_pwa/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets_pwa/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets_pwa/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets_pwa/favicon-16x16.png">
<link rel="manifest" href="manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets_pwa/ms-icon-144x144.png">
<meta name="theme-color" content="#563d7c">


    <style>
      /*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;
}


/*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: #333;
}

body {
  display: -ms-flexbox;
  display: flex;
  color: #fff;
  text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
}

.cover-container {
  max-width: 42em;
}


/*
 * Header
 */
.masthead {
  margin-bottom: 2rem;
}

.masthead-brand {
  margin-bottom: 0;
}

.nav-masthead .nav-link {
  padding: .25rem 0;
  font-weight: 700;
  color: rgba(255, 255, 255, .5);
  background-color: transparent;
  border-bottom: .25rem solid transparent;
}

.nav-masthead .nav-link:hover,
.nav-masthead .nav-link:focus {
  border-bottom-color: rgba(255, 255, 255, .25);
}

.nav-masthead .nav-link + .nav-link {
  margin-left: 1rem;
}

.nav-masthead .active {
  color: #fff;
  border-bottom-color: #fff;
}

@media (min-width: 48em) {
  .masthead-brand {
    float: left;
  }
  .nav-masthead {
    float: right;
  }
}


/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}


/*
 * Footer
 */
.mastfoot {
  color: rgba(255, 255, 255, .5);
}

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  </head>
  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">


  <main role="main" class="inner cover">
    <h1 class="cover-heading">Progressive Web Application</h1>
    
   <?php echo "PHP Version 7.2.1"; ?>
  </main>
</div>

<script type="text/javascript">
 if ('serviceWorker' in navigator) {
    console.log("Will the service worker register?");
    navigator.serviceWorker.register('service-worker.js')
      .then(function(reg){
        console.log("Yes, it did.");
     }).catch(function(err) {
        console.log("No it didn't. This happened:", err)
    });
 }
</script>
</body></html>
