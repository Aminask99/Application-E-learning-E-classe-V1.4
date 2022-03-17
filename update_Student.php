
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylup.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  <title>Document</title>
</head>

<body>
  <div class=" pt-5 cont row-sm">
      
    <?php
      require 'cnx.php';

      $id=$_GET['id'];
      $req = "SELECT * FROM listt_student where id ='$id' ";
      $res = $connect -> query($req) ;
      $row = $res -> fetch_assoc();
      if(isset($_POST['update'])){
      $Name= $_POST['Name'];
      $Email= $_POST['Email'];
      $phone= $_POST['phone'];
      $Enroll_Number= $_POST['Enroll_Number'];
      $DateOfAdmission= $_POST['DateOfAdmission'];
      $req = " UPDATE listt_student  SET  Name = '$Name', Email = '$Email', phone ='$phone', Enroll_Number ='$Enroll_Number', DateOfAdmission = '$DateOfAdmission' where id = '$id'   ";
      $connect  -> query($req);
      header('location: listt_student.php');
      }
    ?>
    <main class="container-fluid mt-0 mt-auto ">
        <div class=" pb-5 cont row-sm">
          <div class="container rounde w-25  p-3 bg-dark col-8 col-md-6 col-lg-4  contain row-sm w-50 ">
                
           <form   method="POST"  class="formlair ps-3 pe-3 ">
                 <h3 class=" fw-bold  chadow m-3  text-light d-flex justify-content-center "> Saisissez les informations de l'apprenant </h3>
               <div class="mb-3 row-sm ">
                  <label class="form-label text-light ">Name</label>
                  <input type="text" class="form-control text-muted shadow-none" name="Name" value="<?php echo $row['Name']; ?>">
               </div>
              <div class="mb-3 row-sm ">
                  <label class="form-label text-light ">Email</label>
                  <input type="email" class="form-control text-muted shadow-none " name="Email"  value="<?php echo $row['Email']; ?>">
              </div>
              <div class="mb-3 row-sm ">
                  <label class="form-label text-light">phone</label>
                  <input type="tel" class="form-control text-muted shadow-none " name="phone"  value="<?php echo $row['phone']; ?>">
              </div>
              <div class="mb-3 row-sm ">
                  <label class="form-label text-light ">Enroll_Number</label>
                  <input type="number" class="form-control text-muted shadow-none " name="Enroll_Number" value="<?php echo $row['Enroll_Number']; ?>">
              </div>
              <div class="mb-3 row-sm ">
                  <label class="form-label text-light">DateOfAdmission</label>
                  <input type="text" class="form-control text-muted shadow-none "name="DateOfAdmission"  value="<?php echo $row['DateOfAdmission']; ?>">
              </div>
              <button class="btn btn-info text-white w-100" name="update">update</button>
            </form>
                    
         </div>
      </div>
    </main>

  </div>
    
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>