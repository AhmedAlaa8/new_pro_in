<?php

include __DIR__ . "/../../model/DB.php";
include __DIR__ . "/../../model/model.php";
include __DIR__ . "/../../model/user.php";
include __DIR__ . "/../../model/post.php";
include __DIR__ . "/../../model/comment.php";
include __DIR__ . "/../../model/conn.php";
include __DIR__ . "/../../class/Requst.php";
include __DIR__ . "/../../class/redirect.php";
include __DIR__ . "/../../class/image.php";



if (isset($_POST['text'])) {


    $result = new Requst;

    $id = $result->getByKey('id');


    $comment = new comment($id);

    $x = $comment->find();

    $data = $result->getPost();

    $result = $comment->update($data);

    redirect::message("comment updated successfule")->redirecttime("/comments");
}
