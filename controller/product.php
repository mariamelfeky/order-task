<?php
    require_once '..' . DIRECTORY_SEPARATOR . 'config.php';
    // var_dump($db);
    $product = new Product();
// add product    
    if(isset($_POST['AddProduct']))
    {   
        $product = new Product();
        $product->setProductName($_POST['name']);
        $product->setProductPrice($_POST['price']);
        $product->insertProduct();
        // var_dump($result);
        header('Location:../Views/list.php');
    }
// update product
    else if(isset($_POST['update']))
    {   
        // $product = new Product;
        // $id = $_POST['id'];
        // $product = mysqli_query($db, "SELECT * FROM products WHERE id=$id");
        $product->setProductName($_POST['name']);
        $product->setProductPrice($_POST['price']);
        $result = $product->updateProduct();
        var_dump($result);
        if($result){
            header('Location:../Views/list.php');
        }
    }

// delete product    
    else if (isset($_GET['id'])) {
        $result = $product->deleteProduct($_GET['id']);
        var_dump($result);
        if ($result) {
            header("Location: ../Views/list.php");
        } else {
            echo "error";
        }
    }
    
?>