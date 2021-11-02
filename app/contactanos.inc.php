<?php

class contactanos {
    private $id_contact;
    private $name_contact;
    private $email_contact;
    private $phone_contact;
    private $description_contact;
    private $dateHour_contact;

    public function __construct($id_contact,$name_contact,$email_contact,$phone_contact,$description_contact,$dateHour_contact){
        $this -> id_contact = $id_contact;
        $this -> name_contact = $name_contact;
        $this -> email_contact = $email_contact;
        $this -> phone_contact = $phone_contact;
        $this -> description_contact = $description_contact;
        $this -> dateHour_contact = $dateHour_contact;
    }

    public function getId_contact(){
        return $this -> id_contact;
    }

    public function getName_contact(){
        return $this -> name_contact;
    }

    public function getEmail_contact(){
        return $this -> email_contact;
    }

    public function getPhone_contact(){
        return $this -> phone_contact;
    }

    public function getDescription_contact(){
        return $this -> description_contact;
    }

    public function getDateHour_contact(){
        return $this -> dateHour_contact;
    }


    public function setName_contact($name_contact){
        $this -> name_contact = $name_contact;
    }

    public function setEmail_contact($email_contact){
        $this -> email_contact = $email_contact;
    }

    public function setPhone_contact($phone_contact){
        $this -> phone_contact = $phone_contact;
    }

    public function setDescription_contact($description_contact){
        $this -> description_contact = $description_contact;
    }
 


}