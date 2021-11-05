<?php
include_once 'app/connection.inc.php';
include_once 'productRepository.inc.php';
include_once 'products.inc.php';

class showProduct{
    public static function show_products(){
        $prod = productRepository::lastsProduct(connection::get_connection());

        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product);
                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }


    public static function show_product($product){
        if(!isset($product)){
            return;
        }
        ?>        
            <div class="menu__content">
                <img src="data:image/jpg;base64,<?php $product->getImage_product()?>" alt="" class="menu__img">
                <span class="menu__category"><?php echo $product->getId_category();?></span>
                <a href="#" class="menu__name"><?php echo $product->getName_product();?> </a>
                <span class="menu__detail"><?php echo nl2br(self::resume_description($product->getDescription_product()));?></span>
                <span class="menu__preci">MXN $<?php echo $product->getPrice_product();?> </span>
            </div>
        <?php

    }

    public static function resume_description($description){
        $long = 35;
        $res ='';
        if(strlen($description)>=$long){
            $res = substr($description, 0, $long);
            $res .= '...';
        }else{
            $res=$description;
        }

        return $res;
    }
}