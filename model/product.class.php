<?php
require_once '..' . DIRECTORY_SEPARATOR . 'config.php';

class Product
{
    private $id;
    private $name;
    private $price;

    public function setProductId($_id)
    {
        $this->id = Validation::validateNumber($_id);
    }
    public function getProductId(){
        return $this->id;
    }
    public function setProductName($_name)
    {
        $this->name = Validation::validateText($_name);
    }
    public function getProductName(){
        return $this->name;
    }
    public function setProductPrice($_price)
    {
        $this->price = Validation::validateNumber($_price);
    }
    public function getProductPrice(){
        return $this->price;
    }
    // Add product
    public function insertProduct(){
        global $db;
        $result =mysqli_query($db,"insert into product set
            name='$this->name',
            price='$this->price'
            ;"); 
    }

    //List All Product
    public function listAllProducts()
    {
        global $db;
        $result = mysqli_query($db,"SELECT * FROM product");
        return $result;
    }

    public function updateProduct(){
        global $db;
        $product_id = $this->id;
        $product_name = $this->name;
        $product_price = $this->price;
    
        $update_product = mysqli_query($db,"update product set
        name = '$product_name',
        price = '$product_price'
        WHERE id = '$product_id';");
        return ($update_product) ? true : false;
    }
    function deleteProduct()
    {
        global $db;
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = mysqli_query($db,"DELETE FROM product WHERE id = $id");
            return ($result) ? true : false;

        }
    }

}