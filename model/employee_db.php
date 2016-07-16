

<?php
// Needed: a function to get a customer by their email address
function get_employee_by_email($email) {
    global $db;
    
       $query = 'SELECT userEmail FROM registration
              WHERE userEmail = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(":email", $email);
    $statement->execute();
    $employee = $statement->fetch();
    $statement->closeCursor();
    return $employee;
}
