<!DOCTYPE html>
<html lang="en">
    <head>
        <!--start of head=-->
        <title>Log in</title>
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
            <main>
                <h2>Employee Login</h2>
                <br>
                <br>
                <p>Sign in with your email account</p>

                <?php if ($message) : ?>
                    <p> <?php echo $message; ?>
                    <?php endif; ?>

                <form method="post" action=".">
                    <label for='email'>Email:</label>
                    <input type="email" name="email" />
                    <input type='hidden' name='action' value='login_submit' />
                    <input type='submit' name='Login' value='Login' />  
                </form>
            </main>
            <footer>
                    <?php include '../view/footer.php'; ?>
            </footer>
        </div>
    </body>
</html>
   