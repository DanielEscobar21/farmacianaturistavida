<?php
include_once DIRECTORIO_RAIZ.'/app/config.inc.php';
include_once DIRECTORIO_RAIZ.'/app/connection.inc.php';
include_once DIRECTORIO_RAIZ.'/app/products/productRepository.inc.php';
include_once DIRECTORIO_RAIZ.'/app/products/products.inc.php';

class showProduct{
    public static function show_products(){
        $prod = productRepository::lastsProduct(connection::get_connection());

        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product,"");
                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }


    public static function show_Allproducts(){
        $prod = productRepository::allProduct(connection::get_connection(),"");
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_DisolutionProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'1');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Disoluciones");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_VitamineProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'3');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Vitaminas");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_OrganoProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'4');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Organoterápicos");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_TinturesProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'18');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Tinturas");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_ImpregProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'10');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Impregnaciones");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_AceitesProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'6');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Aceites Escenciales");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_BalsadamiProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'7');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Balsadami");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_CapsulasProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'8');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Capsulas");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_ExtractosProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'9');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Extractos");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_JabonesProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'11');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Jabones");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_TeProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'17');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Té");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_JarabesProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'12');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Jarabes");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_PlantasProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'13');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Plantas en frasco");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_PomadasProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'14');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Pomadas");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_PropoleoProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'15');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Propóleo");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_TabletasProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'16');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Tabletas");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }

    public static function show_TonicosProducts(){
        $prod = productRepository::allProduct(connection::get_connection(),'19');
        if(count($prod)){
            foreach ($prod as $product){
                self::show_product($product, "Tónicos");                
            }
        }else{
            ?>
            <h2 class="home__subtitle">De momento no hay nada que mostrar.</h2>
            <?php
        }
    }


    public static function show_product($product, $category){
        if(!isset($product)){
            return;
        }
        ?>        
            <div class="menu__content">
                <img src="<?php echo ROUTE_PRODUCTIMAGE . $product->getCode_product();?>.jpg" alt="" class="menu__img">
                <span class="menu__category"><?php echo $category?></span>
                <span class="menu__name"><?php echo $product->getName_product();?> </a>
                <span class="menu__category"><?php echo $product->getPrice_product();?> </span>
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