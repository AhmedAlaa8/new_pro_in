<?php


include __DIR__ . "/../../model/DB.php";
include __DIR__ . "/../../model/model.php";
include __DIR__ . "/../../model/user.php";
include __DIR__ . "/../../model/conn.php";
include __DIR__ . "/../../class/Requst.php";
include __DIR__ . "/../../class/redirect.php";
include __DIR__ . "/../../class/image.php";


if (isset($_POST['id'])) {

    $requst = new Requst();
    $id = $requst->getByKey('id');

    $user = new user($id);

    $oldimage = $user->image;



    $delete = $user->delete();
    if ($delete == true) {

        $deleteimage = new image;
        $deleteimage->deleteimage("imageuser", $oldimage);
    }


    redirect::message("user deleted successfule")->redirecttime("/users");
}
