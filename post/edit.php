<?php


include "./app/model/DB.php";
include "./app/model/model.php";
include "./app/model/user.php";
include "./app/model/post.php";
include "./app/model/conn.php";



$users = user::all();
$posts = post::all();

$post = new post($_POST['id']);



?>


<div class="container mt-5 mb-5 ">

    <form action="../app/control/post/update.php" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id" value="<?= $_POST['id'] ?? "" ?>">


        <div class="form-group ">
            <label for="exampleInputEmail1">title </label>
            <input type="text" class="form-control border border-primary p-3 " value="<?= $post->title ?>" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title">
        </div>
        <div class="form-group ">
            <label for="text">text</label>
            <input type="text" class="form-control border border-primary p-3 " value="<?= $post->text ?>" name="text" id="text" aria-describedby="emailHelp" placeholder="Enter text">
        </div>

        <div class="form-group ">
            <label for="exampleInputEmail1">image</label>
            <input type="file" class="form-control  " name="image" id="exampleInputEmail1" value="<?= $post->image ?>" aria-describedby="emailHelp" placeholder="image">
        </div>


        <div class="form-group ">
            <select name="user_id" class="form-select border border-primary p-3" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <?php foreach ($users as $key => $user) : ?>

                    <option <?= ($post->user_id == $user->id ? "selected" : "") ?> value="<?= $user->id ?>"><?= $user->id ?></option>

                <?php endforeach ?>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>