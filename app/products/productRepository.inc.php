<?php
include_once './app/config.inc.php';
include_once './app/connection.inc.php';
include_once 'products.inc.php';

class productRepository
{
    public static function insertProduct($connection, $product)
    {
        $product_insert = false;
        if (isset($connection)) {
            try {
                $sql = "INSERT INTO products(code_product,name_product,id_category,id_presentation,description_product,image_product,price_product,modificated_date,created_date) 
                        VALUES(:code_product,:name_product,:id_category,:id_presentation,:description_product, :image_product, :price_product, NOW(), NOW())";
                $sentence = $connection->prepare($sql);

                $code_productTMP = $product->getCode_product();
                $name_productTMP = $product->getName_product();
                $id_categoryTMP = $product->getId_category();
                $id_presentationTMP = $product->getId_presentation();
                $description_productTMP = $product->getDescription_product();
                $image_productTMP = $product->getImage_product();
                $price_productTMP = $product->getPrice_product();

                $sentence->bindParam(':code_product', $code_productTMP, PDO::PARAM_INT);
                $sentence->bindParam(':name_product', $name_productTMP, PDO::PARAM_STR);
                $sentence->bindParam(':id_category', $id_categoryTMP, PDO::PARAM_INT);
                $sentence->bindParam(':id_presentation', $id_presentationTMP, PDO::PARAM_INT);
                $sentence->bindParam(':description_product', $description_productTMP, PDO::PARAM_STR);
                $sentence->bindParam(':image_product', $image_productTMP, PDO::PARAM_STR);
                $sentence->bindParam(':price_product', $price_productTMP, PDO::PARAM_STR);

                $product_insert = $sentence->execute();
            } catch (PDOException $ex) {
                print 'ERROR' .  $ex->getMessage();
            }
        }
        return $product_insert;
    }

    public static function lastsProduct($connection){
        $prod = [];
        if(isset($connection)){            
            try {
                $sql = "SELECT * FROM products ORDER BY created_date DESC LIMIT 5";
                $sentence = $connection -> prepare($sql);
                $sentence -> execute();
                $result = $sentence->fetchAll();
                if(count($result)){
                    foreach($result as $res){
                        $prod[] = new products(
                           $res['code_product'],$res['name_product'],$res['id_category'],
                            $res['id_presentation'],$res['description_product'],base64_encode($res['image_product']),
                            $res['price_product']);
                    }
                }
            } catch (PDOException $ex) {
                print 'ERROR: '.$ex->getMessage();
            }
        }
        return $prod;
    }
}
