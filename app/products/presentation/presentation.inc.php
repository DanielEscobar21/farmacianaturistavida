<?php

class presentation
{
    private $id_presentation;
    private $name_presentation;
    private $modificated_date;
    private $created_date;

    public function __construct($id_presentation, $name_presentation, $modificated_date, $created_date)
    {
        $this->id_presentation = $id_presentation;
        $this->name_presentation = $name_presentation;
        $this->modificated_date = $modificated_date;
        $this->created_date = $created_date;
    }

    public function getId_presentation()
    {
        return $this->id_presentation;
    }

    public function setId_presentation($id_presentation)
    {
        $this->id_presentation = $id_presentation;

        return $this;
    }

    public function getName_presentation()
    {
        return $this->name_presentation;
    }

    public function setName_presentation($name_presentation)
    {
        $this->name_presentation = $name_presentation;

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
