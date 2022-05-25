<?php

class image
{

    public function type()
    {
        $file = explode(".", $_FILES['image']['name']);
        $file = end($file);
        return $file;
    }

    public function image($path, $name = "image")
    {

        $file = $this->type();

        $im_name = $_FILES['image']['tmp_name'];

        if ($file == "jpeg" || $file == "jpg" || $file == "png") {

            if ($_FILES['image']['size'] < 2000000) {

                $rand = rand(100, 100000000);

                $newimage = "$name" . "$rand.$file";

                $mov = move_uploaded_file($im_name,  __DIR__ .  "/$path/$newimage");

                if ($mov == true) {
                    return $newimage;
                } else {
                    return false;
                }
            }
        }
    }


    public function deleteimage($name, $oldemage)
    {
        if (!$oldemage == "") {
            unlink(__DIR__ .  "/../../image/$name/$oldemage");
        }
    }
}
