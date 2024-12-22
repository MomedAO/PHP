<?php
    $dbServer = '127.0.0.1';
    $dbUser = 'product';
    $dbPassword = 'productSys';
    $dbBase = 'product';

    $connection = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbBase);

    if (mysqli_connect_errno()) {
        echo 'Problemas de conectar o banco de dados. Erro: ';
        echo mysqli_connect_error();
        die();
    }

    function save_product($connection, $product) { //salva os dados no banco de dados
        $sqlSaveProduct = "INSERT INTO product
            (product_name, product_category, product_price) 
            VALUE(
                '{$product['product_name']}',
                '{$product['product_category']}',
                '{$product['product_price']}'
            )
        ";
        mysqli_query($connection, $sqlSaveProduct);
    }

    function get_product($connection) { //busca os dados do banco de dados
        $sqlGetProduct = "SELECT * FROM product";
        $saveProduct = mysqli_query($connection, $sqlGetProduct);
        $products = [];
        while ($product = mysqli_fetch_assoc($saveProduct)) {
            $products[] = $product;
        }
        return $products;
    }

?>