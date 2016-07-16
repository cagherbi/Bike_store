

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--start of head=-->
        <title>Inventory</title>
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
            <h2> The Inventory</h2>
            <main>

                <section>
                    <!-- display a table of products
                   <h2><php echo $category_name; ?></h2> -->
                    <table>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th class="right">Price</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                        <?php foreach ($products as $product) : ?>
                            <tr>
                                <td><?php echo $product['productType']; ?></td>
                                <td><?php echo $product['productName']; ?></td>
                                <td class="right"><?php echo $product['productPrice']; ?></td>
                                <td><form action="." method="post">
                                        <input type="hidden" name="action"
                                               value="delete_product">
                                        <input type="hidden" name="product_id"
                                               value="<?php echo $product['productID']; ?>">
                                        <input type="submit" value="Delete">
                                    </form></td>

                                <td><form action="." method="post">
                                        <input type="hidden" name="action"
                                               value="edit_product">
                                        <input type="hidden" name="product_id"
                                               value="<?php echo $product['productID']; ?>" >
                                        <input type="submit" value="edit" />
                                    </form></td>

                            </tr>
                        <?php endforeach; ?>
                    </table>
                        <a href="?action=add_product"><button class="button" style="vertical-align:middle"><span>Add Product</span></button></a>  
                  
                </section>
            </main>
            <footer>
            </footer>
        </div>
    </body>
</html>        