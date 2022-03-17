<?php

	session_start ();
	require 'cnx.php'; 

	if(isset($_POST['Login'])) {

		if($_POST["Email"] == null || $_POST["password"] == null)
		{
			$_SESSION["message_error"] = "all fields are required.";
			header("Location: index.php");
		}
		else
		{
			$_SESSION["email"] = $_POST['Email'];
			$_SESSION["password"] = $_POST['password'];

			$result = $connect ->query("select * from comptess");

			if ($result->num_rows > 0)
			{
					while($row = $result->fetch_assoc()) {

						if($_SESSION["email"] == $row["Email"])
						{
							if($_SESSION["password"] == $row["password"])
							{
								$_SESSION["username"] = $row["UserName"];
								
								$_SESSION["active"] = "true";

								if($_POST["check"] == "on")
								{
									setcookie("email",$row["Email"],time() + 2 * 60);
									setcookie("password",$row["password"],time() + 2 * 60);
								}
								else
								{
									setcookie("email");
									setcookie("password");
								}

								header("Location: dash.php");
								break;
							}
							else
							{
								$_SESSION["message_error"] = "wrong password.";
								header("Location: index.php");
								break;
							}
						}
						else
						{
							$_SESSION["message_error"] = "account not exist.";
							header("Location: index.php");
							
						}
				
					
					}
			}
			else
			{
				$_SESSION["message_error"] = "no data in database.";
				header("Location: index.php");	
			}
		}
	}

?>