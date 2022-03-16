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
<body>
<main class="container-fluid mt-0 mt-auto ">
  <div class=" pb-5 cont row-sm">
    <div class="container rounde w-25  p-3 bg-dark col-8 col-md-6 col-lg-4   contain row-sm w-50 ">
           
      <form  action="" method="POST"  class="formlair ps-3 pe-3 ">
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
          <input type="date" class="form-control text-muted shadow-none "name="DateOfAdmission" value=" ">
        </div>
        
        <button class="btn btn-info text-white w-100" name="add">update</button>
     
        

      </form>
               
      </div>
        </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>
</html>