<?php include 'head.php' ?>
<?php include 'navbar.php'?>
    <div class="container px-5">
    <?php 
        foreach ($result as $row):
            include 'card.php';
        endforeach 
    ?>
    </div>
<?php include 'foot.php' ?>