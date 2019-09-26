<section class="card mt-2">
    <header class="card-header d-flex align-items-center">
        <h5 class="card-title pl-4 mb-0">
        <img class= "rounded_circle" src="img/thegret.png" alt="profile" style="width: 40px;" height="40px;">
            <?= $row['name'] ?>
            <small class="pl-4">
               <p>Created at: <?= $row['created_at'] ?> </p> 
               <p>Updated at: <?= $row['updated_at']?></p>
            </small>
        </h5>
    </header>
    <a href="tweet.php?id=<?= $row['id'] ?>">
        <div class="card-body">
            <p class="card-text">
                <?= $row['body'] ?>
            </p>
        </div>
    </a>
    <footer class="card-footer d-flex justify-content-end">
    </footer>
</section>