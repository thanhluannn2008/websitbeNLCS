<?php
    include "product_class.php";
    $product = new Product();
    $product_id = $_GET['product_id'];
    $delete_product = $product -> delete_product($product_id);
?>
