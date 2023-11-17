<?php 

include_once 'connect/connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

  <section id="prod">

    <nav id="navbar" class="navbar navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="products.php">
            <h4>Electro Nacer</h4>
          </a>
          <img src="logo.png" alt="Avatar Logo" style="width:40px;" class="rounded-pill">  
        </div>
      </nav>


    


       
   <div class="d-flex justify-content-center m-5 gap-5">


        <a href="products.php">
            <button type="button" id="btn"  class="btn btn-secondary">All products</button>
        </a>

        <a href="storage-category.php">  
            <button type="button" id="btn" class="btn btn-secondary">storage</button>
        </a>
        

        <div class="dropdown text-center">
          <a class="btn btn-secondary dropdown-toggle" id="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            filter
          </a>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>


        <a href="arduino-category.php">
            <button type="button" id="btn" class="btn btn-secondary">arduino</button>
        </a>
        <a href="motherbord-c.php">
            <button type="button" id="btn"  class="btn btn-secondary">Motherboard</button>
        </a>

   </div>
 

    <div class="container me-5" >
    
      <div class="row mb-5">
        <div class="col-4 mb-5">
            <div id="cardi" class="cols-sm-4 card rounded-3" style="width: 18rem;">
                <h5 class="card-title text-white text-center mb-4 p-2">Toshiba - Portable Hard Drives 2TB</h5>
                <img src="imges/storg1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h2 class="card-text text-danger fw-bold" id="price">260 DH</h2>
                  <h4 class="card-text text-white text-end" id="amount">12</h4>
                </div>
            </div>
        </div>


        <div class="col-4 mb-5">
            <div id="cardi" class="cols-sm-4 card rounded-3 h-100" style="width: 18rem;">
                <h5 class="card-title text-white text-center mb-4 p-2">22TB Ultrastar SATA Data Center Hard Drive</h5>
                <img src="imges/storg2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h2 class="card-text text-danger fw-bold" id="price">650 DH</h2>
                  <h4 class="card-text text-white text-end" id="amount">12</h4>
                </div>
            </div>
      
        </div>


        <div class=" col-4 mb-5">
            <div id="cardi" class="cols-sm-4 card rounded-3 h-100" style="width: 18rem;">
                <h5 class="card-title text-white text-center mb-4 p-2">Ultrastar® DC HC520 | Western Digital</h5>
                <img src="imges/storg3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h2 class="card-text text-danger fw-bold" id="price">600 DH</h2>
                  <h4 class="card-text text-white text-end" id="amount">12</h4>
                </div>
            </div>
        
        </div>


        <div class="col-4 mb-5">
            <div id="cardi" class="cols-sm-4 card rounded-3" style="width: 18rem;">
                <h5 class="card-title text-white text-center mb-4 p-2">Z690 Gaming Motherboard</h5>
                <img src="imges/mother1.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h2 class="card-text text-danger fw-bold" id="price">3500 DH</h2>
                  <h4 class="card-text text-white text-end" id="amount">12</h4>
                </div>
            </div>

      </div>


      <div class="col-4 mb-5">
        <div id="cardi" class="cols-sm-4 card rounded-3" style="width: 18rem;">
            <h5 class="card-title text-white text-center mb-4 p-2">B550 AORUS PRO AC </h5>
            <img src="imges/mother2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-text text-danger fw-bold" id="price">4000 DH</h2>
              <h4 class="card-text text-white text-end" id="amount">12</h4>
            </div>
        </div>

      </div>


      <div class="col-4 mb-5">
        <div id="cardi" class="cols-sm-4 card rounded-3" style="width: 18rem;">
            <h5 class="card-title text-white text-center mb-4 p-2">Gigabyte B550 Aorus Elite V2</h5>
            <img src="imges/mother3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-text text-danger fw-bold" id="price">5050 DH</h2>
              <h4 class="card-text text-white text-end" id="amount">12</h4>
            </div>
        </div>

      </div>


      <div class="col-4 mb-5">
        <div id="cardi" class="cols-sm-4 card rounded-3" style="width: 18rem;">
            <h5 class="card-title text-white text-center mb-4 p-2">arduino uno sensor Shield</h5>
            <img src="imges/ardo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-text text-danger fw-bold" id="price">340 DH</h2>
              <h4 class="card-text text-white text-end" id="amount">12</h4>
            </div>
        </div>
    
      </div>


      <div class="col-4 mb-5">
        <div id="cardi" class="cols-sm-4 card rounded-3" style="width: 18rem;">
            <h5 class="card-title text-white text-center mb-4 p-2">Arduino Uno R3 + Câble USB</h5>
            <img src="imges/ardo2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h2 class="card-text text-danger fw-bold" id="price">500 DH</h2>
              <h4 class="card-text text-white text-end" id="amount">12</h4>
            </div>
        </div>

      </div>


        <div class="col-4 mb-5">
            <div id="cardi" class="cols-sm-4 card rounded-3" style="width: 18rem;">
                <h5 class="card-title text-white text-center mb-4 p-2">Redragon M601-3 Gaming mouse </h5>
                <img src="imges/ardo3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h2 class="card-text text-danger fw-bold" id="price">360 DH</h2>
                  <h4 class="card-text text-white text-end" id="amount">12</h4>
                </div>
            </div>

        </div>
        
    </div>

  </section>

</body>
</html>