<?php 
include 'include/dbinfo.php';
try {
    $dbh = new PDO(
        'mysql:host=localhost;dbname=' . $database . '',
         $username,
          $password
    );
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>