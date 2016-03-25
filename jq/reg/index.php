<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript" src="script.js"></script>

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
            <li><a href="http://frodo6857.eu/jq/login/index.php">Bejelentkezés</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav>
   
<div class="signin-form">

	<div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Regisztráció</h2><hr />
        
        <div id="error">
        <!-- error will be showen here ! -->
        </div>
        
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Név" name="user_name" id="user_name" />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email-cím" name="user_email" id="user_email" />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Jelszó" name="password" id="password" />
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Jelszó ismét" name="cpassword" id="cpassword" />
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Város" name="user_city" id="user_city" />
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Lakcím" name="user_addres" id="user_addres" />
        </div>

         <div class="form-group">
        <input type="text" class="form-control" placeholder="Születési dátum (éééé-hh-nn)" name="user_birthdate" id="user_birthdate" />
        </div>

     	<hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
    		<span class="glyphicon glyphicon-log-in"></span> &nbsp; Regisztráció
			</button> 
        </div>  
      
      </form>

    </div>
    
</div>
    
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>