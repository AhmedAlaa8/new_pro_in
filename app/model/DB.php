<?php

// include "../../confige.php";

class DB
{

    private mysqli|bool $conn;
    protected static string $table;
    private string $query = "";




    public function __construct()
    {

        $this->conn = connect::conn();
    }

    public static function gettable()
    {
        if (!isset(static::$table)) {

            $classname = static::class;
            $classname = strtolower($classname);
            return $classname . "s";
        }

        return static::$table;
    }

    public static function select1($columns)
    {
        $query = "SELECT $columns FROM " . self::gettable();
        $result = mysqli_query(connect::conn(), $query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    }

    /*********** START ************/

    protected function select($columns)
    {
        $this->query = "SELECT $columns FROM " . self::gettable();
        return $this;
    }


    /*********** error ************/

    public function showError()
    {
        echo mysqli_error($this->conn);
    }

    /*********** WHERE ************/


    protected function where($condition)
    {
        $this->query .= " WHERE $condition ";
        return $this;
    }

    /*********** OR ************/

    protected function or($condition)
    {
        $this->query .= " OR $condition ";
        return $this;
    }


    /*********** GET ************/

    protected function get()
    {
        $result = mysqli_query($this->conn, $this->query);

        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    }



    /*********** CREATE ************/

    protected function  createDB(array $data)
    {

        $keys = "";
        $values = "";



        foreach ($data as $key => $value) {

            $keys .= "`$key`,";
            $values .= "'$value',";
        }

        $keys = rtrim($keys, ",");
        $values = rtrim($values, ",");



        $this->query = "INSERT INTO " . self::gettable() . " ($keys) VALUES ($values)";

        return $this;
    }



    /*********** UPDATE ************/

    protected function  updateDB(array $data)
    {
        $values = "";

        foreach ($data as $key => $value) {

            if (!empty($value)) {
                $values .= " `$key` = '$value',";
            }
        }

        $values = rtrim($values, ",");



        $this->query = "UPDATE " . self::gettable() . " SET $values ";
        return $this;
    }



    /*********** DELETE ************/

    protected function deleteDB()
    {
        $this->query = "DELETE FROM " . self::gettable();


        return $this;
    }




    /*********** END ************/

    protected function excute()
    {

        $result = mysqli_query($this->conn, $this->query);

        return $result;
    }
    // public function image()
    // {

    //     $file = explode(".", $_FILES['image']['name']);

    //     $file = end($file);

    //     $im_name = $_FILES['image']['tmp_name'];



    //     if ($file == "jpeg" || $file == "jpg" || $file == "png") {

    //         if ($_FILES['image']['size'] < 2000000) {

    //             $rand = rand(10, 100000000);



    //             $newimage = "user$rand.$file";

    //             $mov = move_uploaded_file($im_name,  __DIR__ .  "/../../image/imageuser/$newimage");

    //             if ($mov == true) {
    //                 return $newimage;
    //             } else {
    //                 return false;
    //             }
    //         }
    //     }
    // }
}
