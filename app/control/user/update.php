<?php

include __DIR__ . "/../../model/DB.php";
include __DIR__ . "/../../model/model.php";
include __DIR__ . "/../../model/user.php";
include __DIR__ . "/../../model/conn.php";
include __DIR__ . "/../../class/Requst.php";
include __DIR__ . "/../../class/redirect.php";
include __DIR__ . "/../../class/image.php";


if (isset($_POST['email'])) {



    $result = new Requst;

    $id = $result->getByKey('id');


    $post = new user($id);

    $x = $post->find();



    $images = new image();



    $image =  $images->image("../../image/imageuser", "user");

    $data = $result->getPost();

    $data["image"] = $image;


    $result = $post->update($data);



    $oldimage = $x['image'];




    if (!empty($_FILES['image']['name'])) {

        $deleteemage = new image;
        $deleteemage->deleteimage("imageuser", $oldimage);
    }





    redirect::message("user updated successfule")->redirecttime("/users");
}
