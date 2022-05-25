<?php

include __DIR__ . "/../app/model/DB.php";
include __DIR__ . "/../app/model/model.php";
include __DIR__ . "/../app/model/user.php";
include __DIR__ . "/../app/model/conn.php";


$users = user::all();

// var_dump($users);

// die;


// $user = new user();
// $users = $user->all();





?>


<div class="container mt-5 mb-5 ">

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">image</th>
            </tr>
        </thead>
        <tbody>



            <?php foreach ($users as $key => $us) : ?>
                <tr>


                    <th scope="row"><?= ++$key ?></th>
                    <td><?= $us->id ?></td>
                    <td><?= $us->name ?></td>
                    <td><?= $us->email ?></td>
                    <td><?= $us->password ?></td>
                    <td><?= $us->image ?></td>
                    <td>

                        <form action="/users/edit" method="POST">
                            <input type="hidden" value="<?= $us->id  ?>" name="id">
                            <button type="submit" class="btn btn-success">update</button>
                        </form>

                        <form action="../app/control/user/delete.php" method="POST">
                            <input type="hidden" value="<?= $us->id ?>" name="id">
                            <button type="submit" class="btn btn-danger mt-1">delete</button>
                        </form>

                    </td>


                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>