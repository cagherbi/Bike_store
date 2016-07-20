<?php
// Get your db connection file, be sure it has a new connection to the
// tech support database
require('../model/database.php');

// Get the models needed - work will need to be done in both
require('../model/employee_db.php');
require('../model/products_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'employee_login';
    }
}


if ($action == 'employee_login') {
    include('employee_login.php');
    
} else if ($action == 'login_submit') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
     
    if ($email) {
        $employee = get_employee_by_email($email);
      
        if ($employee) {
            $products = get_products();
              include('products.php');
              
             
        } else {
           $message = 'Please enter your email address';
           include('employee_login.php');
        }  

    } else {
       $message = 'Please enter a valid email address';
       include('employee_login.php');
       
    }
      
    
 } else if ($action == 'delete_product') {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    if ($product_id == NULL || $product_id == FALSE) {
        $error = "Missing or incorrect product id.";
        include('../errors/error.php');
    } else {
        delete_product($product_id);
         $products = get_products();
             include('products.php');
    }
 }
 
 else if ($action == 'edit_product') {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    
    
    $product = get_product($product_id);
    include('edit_product_form.php');
    
    
 }
    else if ($action == 'add_product') {
       include('product_add.php');
       
    }else if ($action == 'new_product') {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'type');
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price'); 
        
    if ($code == NULL ||$name == NULL || $price == NULL || $price == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
        
            } else { 
                add_product ($code, $name, $price);
                    $products = get_products();
                    include('products.php');
            } 
 
    
} else if ($action == 'update_product') {
    $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
    $code = filter_input(INPUT_POST, 'type');
    $name = filter_input(INPUT_POST, 'name');
    $price = filter_input(INPUT_POST, 'price');
 
    
    if ($product_id == NULL || $product_id == FALSE || $code == NULL ||
            $name == NULL || $price == NULL || $price == FALSE) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
         update_product($product_id, $code, $name, $price);
           $products = get_products();
             include('products.php');
    }
} else if ($action == 'list_products'){
                $products = get_products();
              include('products.php');
}

    