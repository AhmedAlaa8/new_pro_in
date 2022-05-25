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

    $comment = new comment();

    $data = $result->getPost();



    $result = $comment->create($data);



    redirect::message("comment created successfule")->redirecttime("/comments/create");
};
