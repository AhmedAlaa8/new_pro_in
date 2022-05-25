<?php

include "./app/model/DB.php";
include "./app/model/model.php";
include "./app/model/user.php";
include "./app/model/post.php";
include "./app/model/conn.php";



$users = user::all();

// var_dump($users);
// die;

?>

<div class="container mt-5 mb-5 ">

    <form action="../app/control/post/create.php" method="POST" enctype="multipart/form-data">

        <div class="form-group ">
            <label for="exampleInputEmail1">title </label>
            <input type="text" class="form-control border border-primary p-3 " name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title">
        </div>
        <div class="form-group ">
            <label for="text">text</label>
            <input type="text" class="form-control border border-primary p-3 " name="text" id="text" aria-describedby="emailHelp" placeholder="Enter text">
        </div>

        <div class="form-group ">
            <label for="exampleInputEmail1">image</label>
            <input type="file" class="form-control  " name="image" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="image">
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