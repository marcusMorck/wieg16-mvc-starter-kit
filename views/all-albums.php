<?php
/* @var album */
?>

<div class="container">
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

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/vendor/jquery-3.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
</body>