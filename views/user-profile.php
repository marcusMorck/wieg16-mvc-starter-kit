<?php
/* @var $user */
?>
        <div class="container">
            <div class="sidebar">
                <div class="sidebar-profile">
                    <div class="user-img">

                    </div>
                </div>
                <ul>
                    <div class="active"></div><li><a href="#">Account Summary</a></li>
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Change Password</a></li>
                    <li><a href="/my-albums">My Albums</a></li>
                </ul>
            </div>
            <div class="row">
            <div class="col-md-8 user-profile-info">
                <h2 class="text-primary">Account Summary</h2>

                <h3 class="text-primary">Profile</h3>
                <?php foreach ($user as $row) { ?>
                <div class="info">
                    <p>Username:</p>
                    <p class="info"><?= $row['username']?></p>
                </div>
                <div class="info">
                    <p>E-mail:</p>
                    <p><?= $row['email']?></p>
                </div>
                <div class="info">
                    <p>Birth:</p>
                    <p><?= $row['birth']?></p>
                </div>
                <div class="info">
                    <p>Country:</p>
                    <p><?= $row['country']?></p>
                </div>
                <div class="info">
                    <p>Zip-code:</p>
                    <p><?= $row['zip-code']?></p>
                </div>
                <?php } ?>
                <button class="black-btn">Edit Profile</button>
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
