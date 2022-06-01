<?php
include "./app/model/DB.php";
include "./app/model/model.php";
include "./app/model/user.php";
include "./app/model/post.php";
include "./app/model/comment.php";
include "./app/model/conn.php";




$users = user::all();
$comments = comment::all();




// $user = new user();
// $users = $user->all();





?>


<div class="container mt-5 mb-5 ">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">text</th>
                <th scope="col">user_id</th>
                <th scope="col">post_id</th>
            </tr>
        </thead>
        <tbody>



            <?php foreach ($comments as $key => $com) : ?>
                <tr>

                    <th scope="row"><?= ++$key ?></th>
                    <td><?= $com->id ?></td>

                    <td><?= $com->text ?></td>

                    <td><?= $com->user_id ?></td>
                    <td><?= $com->post_id ?></td>
                    <td>

                        <form action="/comments/edit" method="POST">
                            <input type="hidden" value="<?= $com->id  ?>" name="id">
                            <button type="submit" class="btn btn-success">update</button>
                        </form>


                        <form action="../app/control/comment/delete.php" method="POST">
                            <input type="hidden" value="<?= $com->id ?>" name="id">
                            <button type="submit" class="btn btn-danger mt-1">delete</button>
                        </form>

                    </td>


                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>