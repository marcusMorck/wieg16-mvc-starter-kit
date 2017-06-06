<?php
/* @var userAlbums */
?>

<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Release</th>
                    <th>Image</th>
                </tr>
                <?php foreach ($userAlbums as $row) { ?>
                    <tr>
                        <td><?= $row['title'];?></td>
                        <td><?= $row['artist']; ?></td>
                        <td><?= $row['release_year'];?></td>
                        <td><?= $row['album_image'];?></td>
                        <td><button class="btn btn-primary">Update</button></td>
                        <td><button class="btn btn-primary">Delete</button></td>
                    </tr>
                <?php } ?>
            </table>
            <form action="/create" method="POST">
                <input type="submit" class="btn btn-primary" value="Add new album">
            </form>
        </div>
    </div>
</div>