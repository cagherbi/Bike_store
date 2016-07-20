<!DOCTYPE html>
<html lang="en">
    <head>
        <!--start of head=-->
        <title>Add Inventory</title>
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
            <h2> Add Inventory</h2>
            <main>

                <form action="index.php" method="post" id="add_product_form">
                    <input type="hidden" name="action" value="new_product">

                    <label>Category:</label>
                    <select name="type">
                        <option value="1">Bike</option>
                        <option value="2">Apparel </option>
                        <option value="3">Accessories</option>
                    </select>
                    <br>
                    <label>Name:</label>
                    <input type="text" name="name" />
                    <br>

                    <label>List Price:</label>
                    <input type="text" name="price" />
                    <br>

                    <label>&nbsp;</label>
                    <input type="submit" value="Add Product" />
                    <br>
                </form>
                <br>
                <a href="?action=list_products" class="button" style="vertical-align:middle"><span>Product List</span></a>
            </main>
            <footer>
                  <?php include '../view/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
