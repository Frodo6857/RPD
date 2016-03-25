<?php
	
	require_once 'dbconfig.php';

	if($_POST)
	{
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['password'];
		$user_city = $_POST['user_city'];
		$user_addres = $_POST['user_addres'];
		$user_birthdate = $_POST['user_birthdate'];
		$joining_date =date('Y-m-d H:i:s');
		
		$password = md5($user_password);
		
		try
		{	
		
			$stmt = $db_con->prepare("SELECT * FROM reguser WHERE user_email=:email");
			$stmt->execute(array(":email"=>$user_email));
			$count = $stmt->rowCount();
			
			if($count==0){
				
			$stmt = $db_con->prepare("INSERT INTO reguser(user_name,user_email,user_password,user_city,user_addres,user_birthdate,joining_date) VALUES(:uname, :email, :pass, :ucity, :uaddes, :ubirth, :jdate)");
			$stmt->bindParam(":uname",$user_name);
			$stmt->bindParam(":email",$user_email);
			$stmt->bindParam(":pass",$password);
			$stmt->bindParam(":ucity",$user_city);
			$stmt->bindParam(":uaddes",$user_addres);
			$stmt->bindParam(":ubirth",$user_birthdate);
			$stmt->bindParam(":jdate",$joining_date);
					
				if($stmt->execute())
				{
					echo "registered";
				}
				else
				{
					echo "Query could not execute !";
				}
			
			}
			else{
				
				echo "1"; //  not available
			}
				
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}
	}

?>