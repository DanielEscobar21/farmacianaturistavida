<?php
class presentationRepository{

    public static function insert($connection, $presentation){
        $presentation_insert = false;
        if(isset($connection)){
            try {
                $sql = "INSERT INTO presentation(name_presentation,modificated_date,modificated_date) 
                        VALUES(:name_presentation, NOW(), NOW())";
                $sentence = $connection -> prepare($sql);

                $name_presentationTMP = $presentation -> getName_presentation();

                $sentence -> bindParam(':name_presentation', $name_presentationTMP, PDO::PARAM_STR); 

                $presentation_insert = $sentence -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' .  $ex->getMessage();
            }
        }
        return $presentation_insert;
    }

}