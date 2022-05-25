<?php

class redirect
{
    public static function message($message)
    {
        echo "<h1 style='color:green;margin-top:300px;margin-left:550px;'>$message</h1>" . "<br>";
        return new self();
    }
    public static function redirect($path)
    {

        header("location:$path");
    }
    public static function redirecttime($path, $time = 0.2)
    {

        header("refresh:$time;url=$path");
    }
}
