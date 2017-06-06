<?php
/* @var $album */
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Add new album</h1>
            <form action="/create-album" method="POST">
                <input type="text" name="title" placeholder="Title">
                <input type="text" name="artist" placeholder="Artist">
                <input type="text" name="year" placeholder="Year ex '1995'">
                <input type="submit" value="Create" name="cre-btn">
            </form>
        </div>
    </div>
</div>



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/vendor/jquery-3.2.1.min.js"></script>
<script src="/js/vendor/bootstrap.min.js"></script>
</body>
</html>
