<?php
/* @var $randomAlbums*/

?>

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Welcome to MM Music</h1>
            <p class="lead text-muted">One of the leading brands for creating albums
            and showing new and old albums</p>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <?php foreach ($randomAlbums as $row) { ?>
            <div class="col-md-3">
                <h2><?= $row['title']?></h2>
                <img src="<?= $row['album_image']?>" height="250" width="220">
                <p><?= $row['artist']?></p>
                <p><?= $row['release_year']?></p>
            </div>
            <?php } ?>
        </div>

    </div>



    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>
    </body>
</html>
