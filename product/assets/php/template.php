<?php
    session_start();
    include 'base.php';

    if (array_key_exists('product_name', $_GET) && $_GET['product_name'] !== '') {

        $product = [];

        $product['product_name'] = $_GET['product_name'];
        if (array_key_exists('product_category', $_GET)) {
            $product['product_category'] = $_GET['product_category'];
        } else {
            $product['product_category'] = '';
        }
        if (array_key_exists('product_price', $_GET)) {
            $product['product_price'] = $_GET['product_price'];
        } else {
            $product['product_price'] = '';
        }

        save_product($connection, $product);
    }

    $product_list = get_product($connection);
?>