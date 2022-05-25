<?php
include "./app/model/DB.php";
include "./app/model/model.php";
include "./app/model/user.php";
include "./app/model/post.php";
include "./app/model/conn.php";




$users = user::all();
$posts = post::all();




// $user = new user();
// $users = $user->all();





?>


<div class="container mt-5 mb-5 ">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">text</th>
                <th scope="col">image</th>
                <th scope="col">user_id</th>
            </tr>
        </thead>
        <tbody>



            <?php foreach ($posts as $key => $ps) : ?>
                <tr>

                    <th scope="row"><?= ++$key ?></th>
                    <td><?= $ps->id ?></td>
                    <td><?= $ps->title ?></td>
                    <td><?= $ps->text ?></td>
                    <td><?= $ps->image ?></td>
                    <td><?= $ps->user_id ?></td>
                    <td>

                        <form action="/posts/edit" method="POST">
                            <input type="hidden" value="<?= $ps->id  ?>" name="id">
                            <input type="hidden" value="<?= $ps->image ?>" name="image">
                            <button type="submit" class="btn btn-success">update</button>
                        </form>


                        <form action="../app/control/post/delete.php" method="POST">
                            <input type="hidden" value="<?= $ps->id ?>" name="id">
                            <button type="submit" class="btn btn-danger mt-1">delete</button>
                        </form>

                    </td>


                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>