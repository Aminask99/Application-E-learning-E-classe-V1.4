
<?php
  session_start();

  if(!isset($_SESSION["active"]))
 {
     header("location: index.php");
 }

  $listt_student=[
  //  $array=[' '=>'vide','Name' =>'Amina','Email' => 'user@gmail.com', 'phone' => 868759094560,'nroll_Number' => 234576887655643,'DateOfAdmission'=> '08-Dec-2022'],
  //  $array=[''=>'vide','Name' =>'Alex','Email' => 'user@gmail.com', 'phone' => 3456876887,'nroll_Number' => 657876543245777,'DateOfAdmission'=> '09-Dec-2022' ],
  //  $array=[''=>'vide','Name' =>'Wory','Email' => 'user@gmail.com', 'phone' => 6796544322,'nroll_Number' => 678987678907897,'DateOfAdmission'=> '15-Dec-2022' ],
 ];
?>

  <?php
    require 'cnx.php';
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
      <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> 
      <style>
        .models{
  border-radius:15px;
  background:black;
  top: 0;
  left: 0;
  width: 500px;
  height: 700px;
  display: flex;
  justify-content:center;
  align-items:center;
  position:relative;

}
.parent{

  width: 100%;
  height: 100%;
  position:absolute;
  top:0px;
  width: 100vw;
  height: 100vh;
  display: flex;
  justify-content:center;
  align-items:center;
  display:none;
  
}
.btnnn{
  position:absolute;
  top:10px;
  right: 20px;
  color:white;
  background: none;
  outline:none;
  border:none;
}
.List_ {
  transform: translateY(30Px);
  margin-left: 30px;
  gap: 19px;

}

.List_ :hover {
  background-color: #00C1FE;

}

.side-bar {
  background-color: #fff;
  height: 930px;
  width:200px;
}

.image {
  width: 70px;
}
.Logout{
  transform: translateY(5Px);
  margin-left: 26px;
}
.logoo{
  width: 140px;
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

    <main class="container-fluid  position-sticky top-0 start-0">
      <div class="row flex-nowrap">

      <?php
        include 'side-bar.php'; 
      ?>

      <div class="col py-3">

      <?php 
       include 'navbar.php';  
      ?>
      <div
          class=" d-flex main-container  flex-sm-row  flex-column  container bg-light  justify-content-between py-3">
          <div>
              <p class="fw-bold "> Student List </p>
          </div>
          <div>
             <i class="far fa-sort text-info me-3 h5 "></i>
             <button type="button" class="btn btn-info text-light" onclick="modells()">ADD Student</button>
          </div>
      </div>
          <div class="divs2">
            <div id="page-content-wrapper">
            
              <div class="bg-light navbar-light">
              <div class="container-fluid table-responsive">
      <table class="table" >
        
        <thead>
       <?php
       foreach($listt_student as $key => $val){ 
        }
        echo" <tr  class='align-middle border-5 border-light text-secondary 5'>
        <th>Name </th>
        <th>Email </th>
        <th>phone </th>
        <th>nroll_Number </th>
        <th>DateOfAdmission </th>

       </tr>";
        
        ?>
      </thead>
           
              <?php
                $req="SELECT * FROM listt_student ";
                $quiry = mysqli_query($connect, $req); 
                while( $a=mysqli_fetch_assoc( $quiry))
                {
                    $id=$a['id'];    
                echo" <tr class='bg-white align-middle border-5 border-light' class='text-secondary'>
              
                <td class='py-3'> ". $a['Name'] . "</td>
                <td class='py-3'>{$a['Email']}</td>
                <td class='py-3'>{$a['phone']}</td>
                <td class='py-3'>{$a['Enroll_Number']}</td>
                <td class='py-3'>{$a['DateOfAdmission']}</td>" ; ?>
                <td class="py-3">
                <a href="update_Student.php?id=<?php echo $a['id']; ?>" type="button" class="btn btn-sm">
                  <i class="fal fa-pen pe-2 text-info"></i>
                </a>
                </td>
                <td>
                <a href='delete.php?id=<?php echo $a['id']; ?>' type='button' class='btn  btn-sm '>
                  <i class='fal fa-trash text-info'></i>
                </a>
                </td>
                </tr>
                  
              <?php
              
              }
              ?>
    </table>
          </div>
        </div>
      </div>
     </div>
  </main>


        




     <div  id ="model_parent" class="parent ">
        <div class="models">
          <button onclick="close_()" class="btnnn">X</button>
        <form  action="insert-Student.php" method="POST"  class="formlair ps-3 pe-3 ">
          <h3 class=" fw-bold  chadow m-3  text-light d-flex justify-content-center "> Saisissez les informations de l'apprenant </h3>
          <!-- form -->
          <div class="mb-3 row-sm ">
            <label class="form-label text-light ">Name</label>
            <input type="text" class="form-control text-muted shadow-none" name="Name"value=" ">
          </div>
          <div class="mb-3 row-sm ">
            <label class="form-label text-light ">Email</label>
            <input type="email" class="form-control text-muted shadow-none " name="Email" value=" ">
          </div>
          <div class="mb-3 row-sm ">
            <label class="form-label text-light">phone</label>
            <input type="tel" class="form-control text-muted shadow-none " name="phone" value=" ">
          </div>
          <div class="mb-3 row-sm ">
            <label class="form-label text-light ">Enroll_Number</label>
            <input type="number" class="form-control text-muted shadow-none " name="Enroll_Number"value=" ">
          </div>
          <div class="mb-3 row-sm ">
            <label class="form-label text-light">DateOfAdmission</label>
            <input type="text" class="form-control text-muted shadow-none "name="DateOfAdmission" value=" ">
          </div>
          
          <button type="submit" class="btn btn-info text-white w-100" name="add">update</button>
      
        </form>
        </div>
        </div>
        <script src="script.js"></script>  
                
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
              integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
              crossorigin="anonymous"></script>
    
 </body>

</html>
