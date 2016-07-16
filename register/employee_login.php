<!DOCTYPE html>
<html lang="en">
    <head>
        <!--start of head=-->
        <title>Log in</title>
        <meta http-equiv="Content-type" content="text/html;charset=utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
   
        <link href="../main.css" rel="stylesheet" type="text/css">
     
    </head>  <!--end of head=-->
    <body>
        <div class="page">
        <header>    
            <!--start of header=-->
           <!--start of header=-->
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/view/header.php'; ?>
                <!--start of header=-->
        </header>
        <nav>
                <!--start of navigation=-->
        
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

            </footer>
        </div>
    </body>
</html>
            