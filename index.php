
<?php
    session_start();

    if(isset($_SESSION["active"]))
    {
      header("location: dash.php");
    }

    require 'cnx.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>
<style>
  body {
    background: linear-gradient(69.66deg, #00C1FE 19.39%, #FAFFC1 96.69%);
    width: 100%;
    height: 100vh;
  }
 .cont {
    width: 100%;
    transform: translateY(50px);
 }
.contain {

    border-radius: 20px;
    height: 490px;
 }
 .error {
  background:  linear-gradient(69.66deg, #00C1FE 19.39%, #FAFFC1 96.69%);
  color: #A94442;
  padding:10px;
  width: 95%;
 }
 

  .href{
    font-size: 10px;
  }
  @media screen and (max-width: 576px) {
    body{
    background: white;
  }
}
</style>
</head>

<body>
  <!-- Start login page -->
  <div class=" pt-5 cont row-sm">
    <!-- h1 -->
    <div class="container rounde w-25  p-3 bg-white col-8 col-md-6 col-lg-4 pt-7  contain row-sm w-50 ">
      <!--XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX PHP XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->
      <form class="formlair ps-3 pe-3 "  method="POST" action="check_sign_in.php"">
        <h3 class="border-start border-info border-5 fw-bold  chadow m-3 "> E-classe </h3>
        <h3 class="sign-in fw-bold d-flex justify-content-center  fs-5 chadow m-"> SIGN IN</h3>
        <!-- paragraph -->
        <div style="color: red; text-align: center;" > 
            <?php 
              if(isset($_SESSION["message_error"]))
              {
                if($_SESSION["message_error"] != null)
                {
                  echo $_SESSION["message_error"];
                  $_SESSION["message_error"] = null;
                }
                
              }
            ?>
        </div>
        <!-- form -->

        <div class="mb-3 row-sm ">
          <label class="form-label ">Email</label>
          <input type="email" class="form-control text-muted shadow-none" name="Email" value="<?php if(isset($_COOKIE["email"])){ echo $_COOKIE["email"]; } ?>">
        </div>
        <div class="mb-3 row-sm ">
          <label class="form-label ">Password</label>
          <input type="password" class="form-control text-muted shadow-none " name="password" value="<?php if(isset($_COOKIE["password"])){ echo $_COOKIE["password"]; } ?>">
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="check" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">remember me</label>
        </div>
        
        <button class="btn btn-info  w-100" name="Login">Login</button>
     
        <div class="mt-3 text-center href">
          <p class="text-muted m-3  "> Forger your password?<a href="" class="text-info ">Reset password </a>.
          </p>
        </div>

      </form>
      <a href="Sign_up.php" > <button type="submit" class="btn btn-info  w-25" name="Sign_Up">Sign Up</button></a>
      
</div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>
