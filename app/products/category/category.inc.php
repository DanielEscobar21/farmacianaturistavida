<?php

class category{
    private $id_category;
    private $name_category;
    private $modificated_date;
    private $created_date;

    public function __construct($id_category,$name_category,$modificated_date,$created_date){
        $this -> id_category = $id_category;
        $this -> name_category = $name_category;
        $this->modificated_date = $modificated_date;
        $this->created_date = $created_date;
    }

    public function getId_category()
    {
        return $this->id_category;
    }

    public function setId_category($id_category)
    {
        $this->id_category = $id_category;

        return $this;
    }

    public function getName_category()
    {
        return $this->name_category;
    }

    public function setName_category($name_category)
    {
        $this->name_category = $name_category;

        return $this;
    }

    public function getModificated_date()
    {
        return $this->modificated_date;
    }

    public function setModificated_date($modificated_date)
    {
        $this->modificated_date = $modificated_date;

        return $this;
    }

    public function getCreated_date()
    {
        return $this->created_date;
    }

    public function setCreated_date($created_date)
    {
        $this->created_date = $created_date;

        return $this;
    }
}