<?php
class categoryRepository{

    public static function insert($connection, $category){
        $category_insert = false;
        if(isset($connection)){
            try {
                $sql = "INSERT INTO category(name_category,modificated_date,modificated_date) 
                        VALUES(:name_category, NOW(), NOW())";
                $sentence = $connection -> prepare($sql);

                $name_categoryTMP = $category -> getName_category();

                $sentence -> bindParam(':name_category', $name_categoryTMP, PDO::PARAM_STR); 

                $category_insert = $sentence -> execute();
            } catch (PDOException $ex) {
                print 'ERROR' .  $ex->getMessage();
            }
        }
        return $category_insert;
    }

}