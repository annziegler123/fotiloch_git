<!DOCTYPE html>
<html lang="de">
<head>
 <title>Bootstrap Theme The Band</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>
<body>

<header>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <span><img id="logo" src="img/fotiloch_logo2.png"/></span>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Bilder hochladen</a></li>
          <li><a href="#">Registrieren</a></li>
          <li><a href="#meinModal" data-toggle="modal">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>





<!-- Carousel -->



<div id="myCarousel" class="carousel slide" data-ride="carousel">
 <!-- Indicators -->
 <ol class="carousel-indicators">
   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
   <li data-target="#myCarousel" data-slide-to="1"></li>
   <li data-target="#myCarousel" data-slide-to="2"></li>
 </ol>

 <!-- Wrapper for slides -->
 <div class="carousel-inner" role="listbox">
   <div class="item active">
     <img src="img/unterseiten_img/berge2.jpg" alt="berge2">
     <div class="carousel-caption">
       <h3>Berge 2</h3>
       <p>Blick auf den Topfberg.</p>
     </div>
   </div>

   <div class="item">
     <img src="img/unterseiten_img/berge3.jpg" alt="berge3">
     <div class="carousel-caption">
       <h3>Berg 3</h3>
       <p>Blick auf den Pfannenberg.</p>
     </div>
   </div>

   <div class="item">
     <img src="img/unterseiten_img/wasserfall1.jpg" alt="herbst">
     <div class="carousel-caption">
       <h3>Herbst</h3>
       <p>Wald und See im Herbst.</p>
     </div>
   </div>
 </div>

 <!-- Left and right controls -->
 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
   <span class="sr-only">Previous</span>
 </a>
 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
   <span class="sr-only">Next</span>
 </a>
</div>

<div class="container">
  <div class="row">
    <div class="col-xs-3">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Aktivität
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#">Wandern</a></li>
          <li><a href="#">Schwimmen</a></li>
          <li><a href="#">Spazieren</a></li>
          <li><a href="#">Skifahren</a></li>
          <li><a href="#">Velofahren</a></li>
          <li><a href="#">Schlitteln</a></li>
        </ul>
      </div>
    </div>
    <div class="col-xs-3">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Kanton
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#">Aarau</a></li>
          <li><a href="#">Bern</a></li>
          <li><a href="#">Basel</a></li>
          <li><a href="#">...</a></li>
          <li><a href="#">Bern</a></li>
          <li><a href="#">Basel</a></li>
          <li><a href="#">Aarau</a></li>
          <li><a href="#">Bern</a></li>
          <li><a href="#">Basel</a></li>
          <li><a href="#">Aarau</a></li>
          <li><a href="#">Bern</a></li>
          <li><a href="#">Basel</a></li>
        </ul>
      </div>
    </div><!-- col -->
    <div class="col-xs-3">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Zielgruppe
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#">Erwachsene</a></li>
          <li><a href="#">Kinder</a></li>
          <li><a href="#">Gruppen</a></li>
          <li><a href="#">Senioren</a></li>
          <li><a href="#">Familie</a></li>
          <li><a href="#">Jugendliche</a></li>
        </ul>
      </div>
    </div><!-- col -->
  </div><!-- Row -->
</div><!-- Container -->





  <div class="container text-center">
   <h3>Fotiloch</h3>
   <p><em>Finde deinen Traumort!!</em></p>
   <p>Plane deine nächste Wanderung, dein nächstes Lager oder deine nächste Reise anhand von Fotiloch.</p>

 <div class="row">
   <div class="col-sm-4">
     <p><strong>Passstrasse</strong></p><br>
     <a href="#demo" data-toggle="collapse">
     <img class="img-responsive" src="img/unterseiten_img/strasse1.jpg" alt="strasse1"/>
   </div>
 </a>
 <div id="demo" class="collapse">
   <p>Klausenpass</p>
      <p>Wunderschöne Passstrasse im Herzen der Schweiz</p>
      <p>Foto von Alex</p>
    </div>
   <div class="col-sm-4">
     <p><strong>Berge</strong></p><br>
     <a href="#demo2" data-toggle="collapse">
     <img class="img-responsive" src="img/unterseiten_img/berge1.jpg" alt="berge1"/>
   </div>
 </a>
 <div id="demo2" class="collapse">
   <p>Alp Stäz</p>
      <p>2400müM im Kanton Graubünden</p>
      <p>Foto von Jana</p>
    </div>
   <div class="col-sm-4">
     <p><strong>Wasserfall</strong></p><br>
     <a href="#demo3" data-toggle="collapse">
     <img class="img-responsive" src="img/unterseiten_img/wasserfall1.jpg" alt="wasserfall1"/>
   </div>
 </a>
 <div id="demo3" class="collapse">
   <p>Wasserfall bei Klosters</p>
      <p>Tageswanderung von Davos</p>
      <p>Foto von Marc</p>
    </div>
 </div>
</div>
  </div>

<!--        FILTER        -->




<!-- Modals -->
<div class="modal fade" id="meinModal" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="meinModalLabel">Login</h4>
      </div>

      <div class="modal-body">

        <!-- Inhalt von Modal     -->

  			<form id="login-form" action="index.php" method="post" role="form" style="display: block;">
  				<div class="form-group">
  					<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="E-Mail-Adresse" value="">
  				</div>
  				<div class="form-group">
  					<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Passwort">
  				</div>
  				<div class="form-group">
  					<div class="row">
  						<div class="col-sm-9 col-sm-offset-3">
  							<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="einloggen">
  						</div>
  					</div>
  				</div>
  			</form>
  			<!-- /Ende inhalt von Modal -->

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
        </div>

      </div>
      </div>
    </div>
</div>

<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Fotiloch gmbH<a href="http://www.htwchur.ch" data-toggle="tooltip" title="HTW Chur"> www.htwchur.ch</a></p>
</footer>

<script>
$(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip();
})
</script>


<!--      smooth scrolling      -->

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if
  });
})
</script>

<!-- /.modal -->

<!-- Script Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
