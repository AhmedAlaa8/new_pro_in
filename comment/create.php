<?php

include "./app/model/DB.php";
include "./app/model/model.php";
include "./app/model/user.php";
include "./app/model/post.php";
include "./app/model/comment.php";
include "./app/model/conn.php";



$users = user::all();
$posts = post::all();

// var_dump($users);
// die;

?>

<div class="container mt-5 mb-5 ">

    <form action="../app/control/comment/create.php" method="POST">


        <div class="form-group ">
            <label for="text">text</label>
            <input type="text" class="form-control border border-primary p-3 " name="text" id="text" aria-describedby="emailHelp" placeholder="Enter text">
        </div>



        <div class="form-group ">
            <select name="post_id" class="form-select border border-primary p-3" aria-label="Default select example">
                <option selected>Open this select menu</option>

                <?php foreach ($posts as $key => $post) : ?>

                    <option value="<?= $post->id ?>"><?= $post->id ?></option>

                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group ">
            <select name="user_id" class="form-select border border-primary p-3" aria-label="Default select example">
                <option selected>Open this select menu</option>

                <?php foreach ($users as $key => $user) : ?>

                    <option value="<?= $user->id ?>"><?= $user->id ?></option>

                <?php endforeach ?>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>