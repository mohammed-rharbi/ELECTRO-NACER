<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

  <section id="prod">

    <nav id="navbar" class="navbar navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="products.php">
            <h4>Electro Nacer</h4>
          </a>
        </div>
      </nav>


     


  
   <div class="d-flex justify-content-center m-5 gap-5">

    <a href="storage-category.php">  
     <button type="button" id="btn" class="btn btn-secondary">storage</button>
    </a>
    <a href="arduino-category.php">
        <button type="button" id="btn" class="btn btn-secondary">arduino</button>
    </a>
    <a href="motherbord-c.php">
        <button type="button" id="btn" class="btn btn-secondary">Motherboard</button>
    </a>

    
   </div>
 
    <div class="container me-5" >
    
      <div class="row mb-5">
      
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

    </div>

  </section>

</body>
</html>