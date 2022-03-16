<?php
  session_start();

    if(!isset($_SESSION["active"]))
    {
      header("location: index.php");
    }


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "e_classe_db";
  // Create connection
  $connect =mysqli_connect($servername, $username, $password,$dbname);
  $students=$connect->query("SELECT COUNT(id) As NumberOfStudent FROM listt_student");
  $student= $students->fetch_array() ;
  $student= $student[0];

  $coursse=$connect->query("SELECT COUNT(id) As NumberOfCourses FROM courss");
  $courss= $coursse->fetch_array() ;
  $courss= $courss[0];

  $payments=$connect->query("SELECT SUM(Amount_Paid) FROM payment");
  $payment= $payments->fetch_array() ;
  $payment= $payment[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <style>
    .List_ {
      transform: translateY(30Px);
      margin-left: 30px;
      gap: 12px;

    }

    .side-bar {
      height: 800px;
   
    }

    .List_ :hover {
      background-color: #00C1FE;

    }

    .side-bar {
      background-color: #fff;
      height: 1000px;
      width:200px;

    }

    .image {
      width: 100px;
    }

    .cards .carditems {
      border-radius: 8px;
      width: 200px;
      height: 150px;
    }

    .carditems--blue {
      background-color: #F0F9FF;
    }

    .carditems--blue i {
      color: #74C1ED;
    }

    .carditems--rose {
      background-color: #FEF6FB;
    }

    .carditems--rose i {
      color: #EE95C5;
    }

    .carditems--yellow {
      background-color: #FEFBEC;
    }

    .carditems--yellow i {
      color: #00C1FE;
    }

    .carditems--gradient {
      background: linear-gradient(110.42deg, #00C1FE 18.27%, #FAFFC1 91.84%);
    }

    .card__items--gradient i {
      color: #FFFFFF;
    }
    #nbr {
      position: absolute;
      right: 10px;
      bottom: 10px;
    }

    .List_ :hover {
      background-color: #00C1FE
    }

    .Logout {
      transform: translateY(-40Px);
      margin-left: 26px;
    }


    @media screen and (min-width: 576px) {
      .side-bar {

        background-color: #FAFFC1;

      }
    }

    .side-bar {
      background-color: #fff;
      
    }

    @media screen and (min-width: 984px) {
      .side-bar {

        background-color: #FAFFC1;

      }
    }
  </style>
</head>

<body>

  <!--********************************************** saidbar **********************************************-->
  <main class="container-fluid  position-sticky top-0 start-0">
    <div class="row flex-nowrap">
      
     <?php  include 'side-bar.php' ?>

      <div class="col py-3">

        <!--********************************************** NAVBAR **********************************************-->

        <?php  include 'navbar.php' ?>
<!--********************************************** CART **********************************************-->
<?php  include 'cards.php' ?>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

</body>

</html>
