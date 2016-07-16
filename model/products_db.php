<?php


function get_products() {
    global $db;
    $query = 'SELECT * FROM products';
    $statement = $db->prepare($query);
    $statement->execute();
    $product = $statement->fetchAll();
    $statement->closeCursor();
    return $product;
}

function get_product($product_id) {
    global $db;
    $query = 'SELECT * FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product;
}

function delete_product($product_id) {
    global $db;
    $query = 'DELETE FROM products
              WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_product( $code, $name, $price) {
    global $db;
    $query = 'INSERT INTO products
                 ( productType, productName,productPrice)
              VALUES
                 ( :productType, :productName, :productPrice)';
    $statement = $db->prepare($query);
    $statement->bindValue(':productType', $code);
    $statement->bindValue(':productName', $name);
    $statement->bindValue(':productPrice', $price);
    $statement->execute();
    $statement->closeCursor();
}


function update_product($product_id, $code, $name, $price) {
    global $db;
   $query = 'UPDATE 
                    products
               SET   
                     productName = :productName,
                     productType = :productType,
                     productPrice  = :productPrice
                 WHERE productID = :product_id';
   try{
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->bindValue(':productType', $code);
    $statement->bindValue(':productName', $name);
    $statement->bindValue(':productPrice', $price);
    $statement->execute();
    $statement->closeCursor();
  

      } catch (Exception $e) {
        $error_message = $e->getMessage();
        echo "<p>Error message: $error_message</p>";
    }
    
    
}   
?>




