<?php

class connect
{


    public static function conn()
    {
        return mysqli_connect("localhost", "root", "", "progect_in");
    }
}
