<?php



class Requst
{

    private array $post = [];



    public function __construct()
    {
        $this->setPost();
    }

    public function setPost()
    {
        $this->post = $_POST;
    }

    public function getPost()
    {
        return $this->post;
    }


    public function getByKey($key)
    {
        return $this->post[$key];
    }



    public function getby($arr)
    {
        $data = [];

        foreach ($this->post as $key => $value) {

            if (in_array($key, $arr)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }



    public function except($arr)
    {
        $data = [];

        foreach ($this->post as $key => $value) {

            if (!in_array($key, $arr)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
