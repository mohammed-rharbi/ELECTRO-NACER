<?php
include_once 'connect/connect.php';

// Assuming you have a connection to your database established in connect/connect.php
// Replace 'your_table_name' with your actual table name
$p_query = "SELECT * FROM product";
$products = mysqli_query($conn, $p_query);



$c_query = "SELECT * FROM category";
$categories = mysqli_query($conn, $c_query);



if (isset($_GET['category_id'])) {
  $selected_category_id = $_GET['category_id'];
  $p_query = "SELECT * FROM product WHERE category_id = $selected_category_id";
  $products = mysqli_query($conn, $p_query);
}



if (isset($_GET['out_of_stock'])) {
  $p_query = "SELECT * FROM product WHERE stock_quantity < min_quantity";
  $products = mysqli_query($conn, $p_query);
}

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
        <img src="imges/user-icon-2048x2048-ihoxz4vq.png" alt="Avatar Logo" style="width:40px" class="rounded-pill">
      </div>
    </nav>

    <div class="d-flex justify-content-center m-5 gap-5">

      <a href="products.php">
        <button type="button" id="btn" class="btn btn-secondary">All products</button>
      </a>

      <a href="products.php?out_of_stock">
        <button type="button" id="btn" class="btn btn-secondary">Out Of Stock</button>
      </a>


      <div class="dropdown text-center">
        <a class="btn btn-secondary dropdown-toggle" id="btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          category
        </a>
        <ul class="dropdown-menu">
          <?php while ($category = mysqli_fetch_assoc($categories)) { ?>
            <li><a class="dropdown-item" href="products.php?category_id=<?php echo $category['id']; ?>"><?php echo $category['cat_name']; ?></a></li>
          <?php } ?>
        </ul>
      </div>
    </div>

    <div class="container me-5">
      <div class="row">
        <?php while ($product = mysqli_fetch_assoc($products)) { ?>
          <div class="col-md-4 mb-5">
            <div id="cardi" class="cols-sm-4 card rounded-3" style="width: 18rem;">
              <h5 class="card-title text-white text-center mb-4 p-2"><?php echo $product['label']; ?></h5>
              <img src="<?php echo $product['img']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-text text-danger fw-bold" id="price"><?php echo $product['price'] . ' DH'; ?></h2> 
                <h4 class="card-text text-white text-end" id="amount"><?php echo $product['stock_quantity']; ?></h4>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>


  <section class="">
    <footer class="text-center text-white" style="background-color: #0a4275;">
      <div class="container p-4 pb-0">
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">Register for free</span>
            <button type="button" class="btn btn-outline-light btn-rounded">
              Sign up!
            </button>
          </p>
        </section>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Copyright:
        <a class="text-white" href="index.php">ELECTRONACER.com</a>
      </div>
    </footer>
  </section>
</body>
</html>
