<?php


include "./app/model/DB.php";
include "./app/model/model.php";
include "./app/model/user.php";
include "./app/model/post.php";
include "./app/model/comment.php";
include "./app/model/conn.php";



$users = user::all();
$posts = post::all();
$commentss = comment::all();


$comments = new comment($_POST['id']);






?>


<div class="container mt-5 mb-5 ">

    <form action="../app/control/comment/update.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $_POST['id'] ?? "" ?>">


        <div class="form-group ">
            <label for="text">text</label>
            <input type="text" class="form-control border border-primary p-3 " value="<?= $comments->text ?>" name="text" id="text" aria-describedby="emailHelp" placeholder="Enter text">
        </div>



        <div class="form-group ">
            <label for="post">post</label>
            <select name="post_id" class="form-select border border-primary p-3" aria-label="Default select example">
                <option selected>Open this select menu</option>


                <?php foreach ($posts as $key => $post) : ?>

                    <option <?= ($comments->post_id == $post->id ? "selected" : "") ?> value="<?= $post->id ?>"><?= $post->id ?></option>

                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group ">
            <label for="user">user</label>
            <select name="user_id" class="form-select border border-primary p-3" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <?php foreach ($users as $key => $user) : ?>

                    <option <?= ($comments->user_id == $user->id ? "selected" : "") ?> value="<?= $user->id ?>"><?= $user->id ?></option>

                <?php endforeach ?>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>