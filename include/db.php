<?php 
try {
    $dbh = new PDO(
        'mysql:host=localhost;charset=utf8mb4;dbname=' . $database . '',
         $username,
          $password
    );
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>