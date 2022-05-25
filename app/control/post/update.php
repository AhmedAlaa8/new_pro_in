<?php

include __DIR__ . "/../../model/DB.php";
include __DIR__ . "/../../model/model.php";
include __DIR__ . "/../../model/user.php";
include __DIR__ . "/../../model/post.php";
include __DIR__ . "/../../model/conn.php";
include __DIR__ . "/../../class/Requst.php";
include __DIR__ . "/../../class/redirect.php";
include __DIR__ . "/../../class/image.php";



if (isset($_POST['text'])) {


    $result = new Requst;

    $id = $result->getByKey('id');


    $post = new post($id);

    $x = $post->find();



    $images = new image();



    $image =  $images->image("../../image/imagepost", "post");

    $data = $result->getPost();

    $data["image"] = $image;


    $result = $post->update($data);



    $oldimage = $x['image'];




    if (!empty($_FILES['image']['name'])) {

        $deleteemage = new image;
        $deleteemage->deleteimage("imagepost", $oldimage);
    }



    redirect::message("post updated successfule")->redirecttime("/posts");
}
