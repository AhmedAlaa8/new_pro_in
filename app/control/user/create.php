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

    $user = new user();
    $images = new image();


    $image =  $images->image("../../image/imageuser", "user");
    $data = $result->getPost();


    $data["image"] = $image;


    $result = $user->create($data);


    redirect::message("user created successfule")->redirecttime("/users/create");
};
