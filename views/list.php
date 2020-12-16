<?php
    require_once '..' . DIRECTORY_SEPARATOR . 'config.php';

?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" media="screen" href="../assets/css/styles.css"/>
    <title>List Product</title>
</head>
<body>
    <section class="main-padding">
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="list.php">List</a>
                <ul class="navbar-nav mr-auto">
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="addProduct.php">Add product</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="order.php">Order<span class="sr-only"></span></a>
                    </li>
                </ul>
</nav>
    <h1><u>List Product</u></h1>

    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>name</th>
                <th>price</th>
                <th>Edit</th>
                <th>Delete</th>

            </tr>
            </thead>
            <tbody>
                <?php
                    $product = new Product();
                    // $product->deleteProduct();
                    $result = $product->listAllProducts();
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?> EGP</td>
                            <td><a href="editProduct.php?id=<?php echo $row["id"] ?>" class="btn btn-success btn-sm">Edit</a></td>
                            <td><a href="../controller/product.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    <?php } ?>
                    
            </tbody>
    </table>
</div>
</section>
    <script src="../assets/js/jquery-3.3.1.js"></script>
      <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/popper.min.js"></script>
</body>
</html>