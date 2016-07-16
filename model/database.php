 <?php
 /*
 * local host settings   
 */
 
//$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
//$username = 'mgs_user';
//$password = 'pa55word';

/*
 * Production Settings
 */
   $dsn = 'mysql:host=localhost;dbname=bikedese_store';
    $username = 'bikedese_mgsuser';
    $password = 'Heatherd1';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>