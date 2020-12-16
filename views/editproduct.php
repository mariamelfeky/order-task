<?php
    require_once '..' . DIRECTORY_SEPARATOR . 'config.php';

?>
<?php
$id = $_GET['id'];
$result = mysqli_query($db, "SELECT * FROM product WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $name = $res['name'];
    $price = $res['price'];
    // echo $name;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" media="screen" href="../assets/css/styles.css"/>
    <title>Edit Product</title>
</head>
<body>
    <main class="add-product">
        <section class="main-padding">
          <div class="container">
            <h1><u>Edit Product</u></h1>

            <form action="../controller/product.php" method="POST">
              <div class="form-group row">
                <label for="" class="offset-sm-1 col-sm-2 control-label">Product</label>
                <div class="col-sm-6">
                  <input class="form-control" type="text" name ="name" value="<?php echo $name; ?>" placeholder="Enter Product Name"/>
                </div>
              </div>
              <div class="form-group row">
                <label for="" class="offset-sm-1 col-sm-2 control-label">Price</label>
                <div class="col-sm-2">
                  <input class="form-control" type="number" name="price" value="<?php echo $price; ?>" min="0.00" max="10000.00" placeholder="0.0"/>
                </div>
                <div class="col-sm-1">
                  <span>EGP</span>
                </div>
              </div>    
              <div class="form-group text-center">
                <button class="btn btn-success" name="update" type="submit">Update</button>
              </div>
            </form>
          </div>
        </section>
      </main>
      <script src="../assets/js/jquery-3.3.1.js"></script>
      <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/popper.min.js"></script>
</body>
</html>