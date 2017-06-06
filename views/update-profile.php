<?php
/* @var $user */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">

        <title>MM Music</title>

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">MM Music</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../views/register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <?php foreach ($user as $row) { ?>
        <form method="POST" action="update-profile.php">
           <label>Username<input type="text" name="username" value="<?= $row['username']?>"></label><br>
            <label>Email<input type="email" name="email" value="<?= $row['email']?>"></label><br>
            <label>Birth<input type="date" name="birth"></label><br>
            <label>Country<input type="text" name="country"></label><br>
            <label>Adress<input type="text" name="adress"></label><br>
            <label>Zip-code<input type="text" name="zip-code"></label><br>
            <input type="submit" value="Update" name="upd-btn">
            <?php } ?>
        </form>

        <?php
        if(isset($_POST['upd-btn'])){

        }

        ?>

        <!-- Bootstrap core JavaScript
================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="/js/vendor/jquery-3.2.1.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
    </body>
</html>
