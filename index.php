<!DOCTYPE html>
<html lang="en">
    <head>
        <!--start of head=-->
        <title>Store</title>
        <?php include 'view/head.php'; ?>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <link href="main.css" rel="stylesheet" type="text/css">

    </head>  <!--end of head=-->
    <body>
        <div class="page">
            <header>    
                <!--start of header=-->
                <?php include 'view/header.php'; ?>
                <!--start of header=-->
            </header>
            <nav>
                <!--start of navigation=-->
                <?php include 'view/nav.php'; ?>
                <!--End of navigation=-->
            </nav>
            <main>

                <h2>WELCOME TO BIKE DESERT STORE</h2>
               <a href="/store/register/"><button class="button" style="vertical-align:middle"><span>Login</span></button></a>
            </main>

            <footer>
                <?php include 'view/footer.php'; ?>
            </footer>

        </div>
    </body>
</html>