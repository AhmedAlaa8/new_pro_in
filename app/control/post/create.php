<?php

include __DIR__ . "/../../model/DB.php";
include __DIR__ . "/../../model/model.php";
include __DIR__ . "/../../model/user.php";
include __DIR__ . "/../../model/post.php";
include __DIR__ . "/../../model/conn.php";
include __DIR__ . "/../../class/Requst.php";
include __DIR__ . "/../../class/redirect.php";
include __DIR__ . "/../../class/image.php";





if (isset($_POST['title'])) {


    $result = new Requst;

    $post = new post();
    $images = new image();

    $image =  $images->image("../../image/imagepost", "post");
    $data = $result->getPost();


    $data["image"] = $image;

    $result = $post->create($data);





    redirect::message("post created successfule")->redirecttime("/posts/create");
};
