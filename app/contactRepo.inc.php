<?php
class contactRepo{

    public static function insert($connection, $contact){
        $contact_insert = false;
        if(isset($connection)){
            try {
                $sql = "INSERT INTO contactanos(name_contact,email_contact,phone_contact,description_contact,dateHour_contact) 
                        VALUES(:name_contact,:email_contact,:phone_contact,:description_contact, NOW())";
                $sentence = $connection -> prepare($sql);

                $name_contactTMP = $contact -> getName_contact();
                $email_contactTMP = $contact -> getEmail_contact();
                $phone_contactTMP = $contact -> getPhone_contact();
                $description_contactTMP = $contact -> getDescription_contact();

                $sentence -> bindParam(':name_contact', $name_contactTMP, PDO::PARAM_STR);
                $sentence -> bindParam(':email_contact', $email_contactTMP, PDO::PARAM_STR);
                $sentence -> bindParam(':phone_contact', $phone_contactTMP, PDO::PARAM_INT);
                $sentence -> bindParam(':description_contact', $description_contactTMP, PDO::PARAM_STR);
                



                $contact_insert = $sentence -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' .  $ex->getMessage();
            }
        }
        return $contact_insert;
    }

}