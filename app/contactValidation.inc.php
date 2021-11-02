<?php

class contactValidation{
    private $warningStart;
    private $warningEnd;
    private $name_contact;
    private $email_contact;
    private $phone_contact;
    private $description_contact;
    private $dateHour_contact;

    private $error_name_contact;
    private $error_email_contact;
    private $error_phone_contact;
    private $error_description_contact;

    public function __construct($name_contact,$email_contact,$phone_contact,$description_contact){
        $this-> warningStart ="<br><div class='alert alert-danger' role=alert>";
        $this-> warningEnd ="</div>";
        $this -> name_contact = "";
        $this -> email_contact = "";
        $this -> phone_contact = "";
        $this -> description_contact = "";
        $this -> dateHour_contacts = "";

        $this -> error_name_contact = $this -> name_validate($name_contact);
        $this -> error_email_contact = $this -> email_validate($email_contact);
        $this -> error_phone_contact = $this -> phone_validate($phone_contact);
        $this -> error_description_contact = $this -> description_validate($description_contact);

    }

    public function varaible_iniciada ($var){
        if(isset($var)&& !empty($var)){
            return true;
        }else{
            return false;
        }
    }

    private function name_validate($name_contact){
        if(!$this -> varaible_iniciada($name_contact)){
            return "Favor de Escribir su Nombre Completo.";
        }else{
            $this -> name_contact = $name_contact;
        }

        if(strlen($name_contact)<=5){
            return "El Nombre tiene que contener mas de 5 carácteres.";
        }

        if(strlen($name_contact)>=255){
            return "El Nombre no puede tener mas de 255 carácteres.";
        }

        return "";
    }

    private function email_validate($email_contact){
        if(!$this -> varaible_iniciada($email_contact)){
            return "Favor de Escribir un Correo Válido.";
        }else{
            $this -> email_contact = $email_contact;
        }
        if(strlen($email_contact)>=255){
            return "El Correo no puede tener mas de 255 carácteres.";
        }

        return "";
    }

    private function phone_validate($phone_contact){
        if(!$this -> varaible_iniciada($phone_contact)){
            return "Favor de Escribir un Número Válido.";
        }else{
            $this -> phone_contact = $phone_contact;
        }

        if(strlen($phone_contact)>10||strlen($phone_contact)<10){
            return "El Número de Teléfono tiene que ser de 10 dígitos.";
        }
        return "";
    }

    private function description_validate($description_contact){
        if(!$this -> varaible_iniciada($description_contact)){
            return "Favor de Escribir un Comentario Válido.";
        }else{
            $this -> description_contact = $description_contact;
        }
        return "";
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

    public function getError_name_contact(){
        return $this -> error_name_contact;
    }

    public function getError_email_contact(){
        return $this -> error_email_contact;
    }

    public function getError_phone_contact(){
        return $this -> error_phone_contact;
    }

    public function getError_description_contact(){
        return $this -> error_description_contact;
    }

    public function showName_contact(){
        if($this -> name_contact !== ""){
            echo 'value="' . $this -> name_contact .'"';
        }
    }
    public function showError_name_contact(){
        if($this -> error_name_contact !==""){
            echo $this-> warningStart . $this-> error_name_contact . $this-> warningEnd;
        }
    }

    public function showEmail_contact(){
        if($this -> email_contact !== ""){
            echo 'value="' . $this -> email_contact .'"';
        }
    }
    public function showError_email_contact(){
        if($this -> error_email_contact !==""){
            echo $this-> warningStart . $this-> error_email_contact . $this-> warningEnd;
        }
    }

    public function showPhone_contact(){
        if($this -> phone_contact !== ""){
            echo 'value="' . $this -> phone_contact .'"';
        }
    }
    public function showError_phone_contact(){
        if($this -> error_phone_contact !==""){
            echo $this-> warningStart . $this-> error_phone_contact . $this-> warningEnd;
        }
    }

    public function showDescription_contact(){
        if($this -> description_contact !== ""){
            echo 'value="' . $this -> description_contact .'"';
        }
    }
    public function showError_description_contact(){
        if($this -> error_description_contact !==""){
            echo $this-> warningStart . $this-> error_description_contact . $this-> warningEnd;
        }
    }

    public function valid_contact(){
        if($this -> error_name_contact === ""&&$this -> error_email_contact === "" && 
        $this -> error_phone_contact === "" && $this -> error_description_contact === ""){
            return true;
        }else{
            return false;
        }
    }
}