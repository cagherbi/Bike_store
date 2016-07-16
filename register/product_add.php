

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--start of head=-->
        <title>Add Inventory</title>
        <meta http-equiv="Content-type" content="text/html;charset=utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <link href="../main_1.css" rel="stylesheet" type="text/css">

    </head>  <!--end of head=-->
    <body>
        <div class="page">
              <header>    
                <!--start of header=-->
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
                <!--start of header=-->
            </header>
            <nav>
                <!--start of navigation=-->

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

                    <label>Code:</label>
                    <input type="text" name="code" />
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
                <a href="?action=list_products"><button class="button" style="vertical-align:middle"><span>Product List</span></button></a>

            </main>
            <footer>
            </footer>
        </div>
    </body>
</html>
