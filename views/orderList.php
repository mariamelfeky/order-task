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
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>
<body>


<ul id="drag1" src="img_logo.gif" draggable="true" ondragstart="drag(event)" width="336" height="69">

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
    <div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
<ul>
<?php
            $product = new Product();
            // $product->deleteProduct();
            $result = $product->listAllProducts();
            while ($row = mysqli_fetch_assoc($result)) { ?>
                
                    <li draggable="true" ondragstart="drag(event)"><?php echo $row['name']; ?></li>
                    
                </tr>
            <?php } ?>
    
</ul>
    
</div>
    <div style="height: 200px; width: 500px; border: 2px solid gray;">

</div>

</div>
</section>
    <script src="../assets/js/jquery-3.3.1.js"></script>
      <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="../assets/js/popper.min.js"></script>
</body>
</html>