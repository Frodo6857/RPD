<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM reguser WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bejelentkezés</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

</head>

<body>

<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Üdv <?php echo $row['user_name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;Profil Megtekintése</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Kijelentkezés</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    
<div class="body-container">

<div class="container">
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Üdv <?php echo $row['user_name']; ?></strong>!  Üdvözöljük a főoldalon.
    </div>
    Név: <?php echo $row['user_name']; ?>
    <br>
    Email: <?php echo $row['user_email']; ?>
    <br>
    Város: <?php echo $row['user_city']; ?>
    <br>
    Lakcím: <?php echo $row['user_addres']; ?>
    <br>
    Születési dátum: <?php echo $row['user_birthdate']; ?>
    <br>
    Regisztráció időpontja: <?php echo $row['joining_date']; ?>

</div>

</div>

</div>
</div>


</div>

</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>