<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col">
            Main menu!
            <a href="?">Index page</a>
            <a href="?about-us">About us</a>
            <?php if (isset($_SESSION['user'])) { ?>
                <a href="logout.php">Log out</a>
            <?php } else { ?>
                <a href="?login">Login</a>
            <?php } ?>
        </div>
    </div>

    <?php if (isset($_SESSION['user'])): ?>
        <div class="row">
            <div class="col">
Hello, 
<?= $_SESSION['user']['firstName'] . ' ' . $_SESSION['user']['lastName']; ?>
            </div>
        </div>
    <?php endif; ?>