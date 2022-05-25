<?php

class model extends DB
{


    private $id;

    public function __construct($id = 0)
    {
        parent::__construct();
        $this->id = $id;
    }


    public function __get($name)
    {
        $models = $this->find();

        if (array_key_exists($name, $models)) {

            $this->$name = $models[$name];
            return $this->$name;
        } else {

            $method = "get$name";
            if (method_exists($this, $method)) {

                return $this->$method;
            } else {
                die('shit.....');
            }
        }
    }

    public function find()
    {
        return $this->select('*')->where("id = " . $this->id)->get()[0];
    }




    public static function all()
    {
        $data = self::select1("*");

        $class = static::class;
        $newdata = [];
        foreach ($data as $model) {

            $newdata[] = new $class($model['id']);
        }
        return $newdata;
    }



    public function update($data)
    {
        $result = $this->updateDB($data)->where("id = " . $this->id)->excute();
        if ($result == false) {
            $this->showError();
        }
        return $result;
    }

    public function delete()
    {
        $result = $this->deleteDB()->where("id = " . $this->id)->excute();
        if ($result == false) {
            self::showError();
        }
        return $result;
    }

    public  function create($data)
    {
        $result = $this->createDB($data)->excute();
        if ($result == false) {
            self::showError();
        }
        return $result;
    }
}
