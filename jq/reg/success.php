<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registráció</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

<script type="text/javascript">
$('document').ready(function()
{ 
	window.setTimeout(function(){
									
		window.location.href = "index.php";
										
	}, 6000);
	
	
	$("#back").click(function(){
		window.location.href = "index.php";
	});
});
</script>

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://Frodo6857.eu/" target="_blank" title="home page">Frodo6857.eu</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://frodo6857.eu/jq/login/index.php">Bejelentkezés</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
    
<div class="signin-form">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Sikeres!</strong>  A regisztráció ikeres.
    </div>
    
    <button class="btn btn-primary" id="back">
      <span class="glyphicon glyphicon-backward"></span> &nbsp; Vissza a Regisztrációhoz
    </button>
    
</div>

</div>

</body>
</html>