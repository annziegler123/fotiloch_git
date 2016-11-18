<!DOCTYPE html>
<html lang="de">
<head>
 <title>Bootstrap Theme The Band</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
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
        <a class="navbar-brand" href="#">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Bilder hochladen</a></li>
          <li><a href="#">Registrieren</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<!-- Index-Banner -->
<div class="index-banner">
  <div class="row">
    <div class="col-xs-12">
      <img id="index-img" class="responsive-img" src="img/dawn-landscape-mountains-nature.jpg">
      <p></p>
    </div>
  </div>
  <div class="row">
<p></p>
  </div>
</div>

  <div class="container text-center">
   <h3>Fotiloch</h3>
   <p><em>Finde deinen Traumort!!</em></p>
   <p>Plane deine nächste Wanderung, dein nächstes Lager oder deine nächste Reise anhand von Fotiloch.</p>
 <div class="row">
   <div class="col-sm-4">
     <p><strong>Name</strong></p><br>
     <img class="img-responsive" src="img/unterseiten_img/strasse1.jpg" alt="strasse1"/>
   </div>
   <div class="col-sm-4">
     <p><strong>Name</strong></p><br>
     <img class="img-responsive" src="img/unterseiten_img/berge1.jpg" alt="berge1"/>
   </div>
   <div class="col-sm-4">
     <p><strong>Name</strong></p><br>
     <img class="img-responsive" src="img/unterseiten_img/wasserfall1.jpg" alt="wasserfall1"/>
   </div>
 </div>
</div>

<!-- Modals -->
<div class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <!-- Input Files here -->
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>

<!-- /.modal -->

<!-- Script Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
