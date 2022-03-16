<?php

    require "cnx.php";

    session_start();

          if(isset($_POST['Sign_Up'])) {

            if($_POST["UserName"] == null || $_POST["Email"] == null ||
                $_POST["password"] == null || $_POST["C_Password"] == null )
            {
                $_SESSION["message_error"] = "all fields are required.";
                header("Location: Sign_up.php");
            }
            else
            {
                if($_POST["password"] != $_POST["C_Password"])
                {
                    $_SESSION["message_error"] = "password does not match.";
                    header("Location: Sign_up.php");
                }
                else
                {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "e_classe_db";
                    // Create connection
                    $connect = new mysqli($servername, $username, $password,$dbname);
                  
                        $UserName=$_POST['UserName'];
                        $Email=$_POST['Email'];
                        $password=$_POST['password'];

                        $rqt = "INSERT INTO `comptess`(`Email`, `password`, `UserName`) VALUES ('$Email','$password','$UserName')";

                        mysqli_query($connect,$rqt);
                   
                        $_SESSION["message_succes"] = "created succesfuly.";
                        header("location: Sign_up.php");
                }
            }
        }
        
?>  