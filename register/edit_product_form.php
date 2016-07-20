<!DOCTYPE html>
<html lang="en">
    <head>
        <!--start of head=-->
        <title>Edit Inventory</title>
        <?php include '../view/head.php'; ?>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="../css/main.css" rel="stylesheet" type="text/css">

    </head>  <!--end of head=-->
    <body>
        <div class="page">
            <header>    
                <!--start of header=-->
                <?php include '../view/header.php'; ?>
                <!--start of header=-->
            </header>
            <nav>
                <!--start of navigation=-->
                <?php include '../view/nav.php'; ?>
                <!--End of navigation=-->
            </nav>
            <h2> Edit Inventory</h2>
            <main>
                <form action="." method="post" id="edit_product_form">
                    <input type="hidden" name="action"
                           value="update_product">

                    <label>Category:</label>
                    <select name="type">
                        <option value="1">Bike</option>
                        <option value="2">Apparel </option>
                        <option value="3">Accessories</option>
                    </select>
                    <br>
                    <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
                    <label>Name:</label>
                    <input type="text" name="name" value="<?php echo $product['productName']; ?>"><br>

                    <label>List Price:</label>
                    <input type="text" name="price" value="<?php echo $product['productPrice']; ?>"><br>

                    <label>&nbsp;</label>
                    <input type="submit" value="Update Product"><br>
                </form>
                <a href="?action=add_product" class="button" style="vertical-align:middle"><span>Add Product</span></a>
            </main>
            <footer>
                <?php include '../view/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>

