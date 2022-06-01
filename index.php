<?php


include "./components/head.php";
include "./components/nav.php";




$uri = $_SERVER['REQUEST_URI'];


if ($uri == "/users") {

    include __DIR__ . "/user/index.php";
} elseif ($uri == "/users/create") {

    include __DIR__ . "/user/create.php";
} elseif ($uri == "/users/edit") {

    include __DIR__ . "/user/edit.php";
} elseif ($uri == "/posts") {

    include __DIR__ . "/post/index.php";
} elseif ($uri == "/posts/create") {

    include __DIR__ . "/post/create.php";
} elseif ($uri == "/posts/edit") {

    include __DIR__ . "/post/edit.php";
} elseif ($uri == "/comments/edit") {

    include __DIR__ . "/comment/edit.php";
} elseif ($uri == "/comments/create") {

    include __DIR__ . "/comment/create.php";
} elseif ($uri == "/comments") {

    include __DIR__ . "/comment/index.php";
} elseif ($uri == "/friends/edit") {

    include __DIR__ . "/friend/edit.php";
} elseif ($uri == "/friends/create") {

    include __DIR__ . "/friend/create.php";
} elseif ($uri == "/friends") {

    include __DIR__ . "/friend/index.php";
} elseif ($uri == "/chats/edit") {

    include __DIR__ . "/chat/edit.php";
} elseif ($uri == "/chats/create") {

    include __DIR__ . "/chat/create.php";
} elseif ($uri == "/chats") {

    include __DIR__ . "/chat/index.php";
} else {

    include "./components/aside_L.php";
    include "./components/middle.php";
    include "./components/aside_R.php";
}



include "./components/footer.php";
