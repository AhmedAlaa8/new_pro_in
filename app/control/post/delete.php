<?php


include __DIR__ . "/../../model/DB.php";
include __DIR__ . "/../../model/model.php";
include __DIR__ . "/../../model/user.php";
include __DIR__ . "/../../model/post.php";
include __DIR__ . "/../../model/conn.php";
include __DIR__ . "/../../class/Requst.php";
include __DIR__ . "/../../class/redirect.php";
include __DIR__ . "/../../class/image.php";


if (isset($_POST['id'])) {

    $requst = new Requst();
    $id = $requst->getByKey('id');

    $post = new post($id);

    $oldimage = $post->image;



    $delete = $post->delete();
    if ($delete == true) {

        $deleteimage = new image;
        $deleteimage->deleteimage("imagepost", $oldimage);
    }

    redirect::message("post deleted successfule")->redirecttime("/posts");
}
