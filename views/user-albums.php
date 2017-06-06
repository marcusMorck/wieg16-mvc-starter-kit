<?php
/* @var $album */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="../../favicon.ico">

    <title>MM Music</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!--Custom CSS -->
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
                <li><a href="/">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="/all-albums">All Albums</a></li>
                <li><a href="#">Contact</a></li>
                <li class="active"><a href="#">My Profile</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>
</header>


<div class="container">
    <div class="sidebar">
        <div class="sidebar-profile">
            <div class="user-img">

            </div>
        </div>
        <ul>
            <li><a href="#">Account Summary</a></li>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="#">Change Password</a></li>
            <div class="active"></div><li><a href="#">My Albums</a></li>
        </ul>
    </div>
    <div class="row">
        <?php foreach ($album as $row) { ?>
            <div class="col-md-4">
                <h2><?= $row['title']?></h2>
                <img src="<?= $row['album_image']?>" height="42" width="42">
                <p><?= $row['artist']?></p>
                <p><?= $row['release_year']?></p>
            </div>
        <?php } ?>
    </div>
</div>



<footer class="navbar-fixed-bottom">
    <div class="container">
        <p>&copy; 2016 Company, Inc.</p>
    </div>
</footer>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/vendor/jquery-3.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
</body>
</html>