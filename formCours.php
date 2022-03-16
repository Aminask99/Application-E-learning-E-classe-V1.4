<!-- <?php 
// session_start ();
// if(!isset($_SESSION["Login"]))
// 	header("location:Sign_in.php");


?> -->
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
    height: 100px;
  }
 .cont {
    width: 100%;
    transform: translateY(50px);
 }
.contain {

    border-radius: 20px;
    height: 430px;
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
<div class=" pt-5 cont row-sm">
    
    <?php
require'cnx.php';
// echo"connected";

require'insert-courss.php';
?>
<main class="container-fluid mt-0 mt-auto ">
  <div class=" pb-5 cont row-sm">
    <div class="container rounde w-25  p-3 bg-dark col-8 col-md-6 col-lg-4   contain row-sm w-50 ">
           
      <form  action="" method="POST"  class="formlair ps-3 pe-3 ">
        <h3 class=" fw-bold  chadow m-3  text-light d-flex justify-content-center "> Courss </h3>
       
        <div class="mb-3 row-sm ">
          <label class="form-label text-light ">Title</label>
          <input type="text" class="form-control text-muted shadow-none" name="Title"value=" ">
        </div>
        <div class="mb-3 row-sm ">
          <label class="form-label text-light ">Description_</label>
          <input type="text" class="form-control text-muted shadow-none " name="Description_" value=" ">
        </div>
        <div class="mb-3 row-sm ">
          <label class="form-label text-light">Price</label>
          <input type="number" class="form-control text-muted shadow-none " name="Price" value=" ">
        </div>
        
        <button class="btn btn-info text-white w-100" name="add">save</button>
      
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
