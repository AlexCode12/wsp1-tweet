<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DAS TWEET</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container px-5">
        <?php foreach ($result as $row): ?>
        <section class="card mt-4">
                    <header class="card-header d-flex align-items-center">
                            <h5 class="card-title pl-4 mb-0">
                                <img class= "rounded_circle" src="img/THEGRET.PNG" alt="" style="width: 40px;" height="40px;">
                                 <?= $row['name'] ?>
                                    <small class="pl-4">
                                      <p>Created at: <?= $row['created_at'] ?> </p> 
                                      <p>Updated at: <?= $row['updated_at'] ?> </p> 
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
            <footer class="card-footer">
                <a href="#" class="card-link">Likes</a>
            </footer>
        </section>
    <?php endforeach ?>
    </div>
<!-- 
    Lägga in bootstrap
    css och js
    copy paste in ett kort
    redigera det för ett tweet
    testa att göra flera kort
-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>