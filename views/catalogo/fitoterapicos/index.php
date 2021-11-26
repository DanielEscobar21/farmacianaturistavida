<?php
include_once '../../../app/config.inc.php';
include_once DIRECTORIO_RAIZ.'/app/connection.inc.php';
include_once DIRECTORIO_RAIZ.'/app/products/showProduct.inc.php';

$title ='Productos Fitoterápicos - ';

include_once DIRECTORIO_RAIZ.'/layouts/doc.inc.php';
include_once DIRECTORIO_RAIZ.'/layouts/navbar.inc.php';
connection::open_connection();
?>

<main class="l-main"> 
    <section class="menu section bd-container">
    <h2 class="section-title">Nuestros Productos Fitoterápicos</h2>
        <ul class="nav-links">
            <li class="center"><a href="#Aceites">Aceites Escenciales</a></li>
            <li class="center"><a href="#Balsadami">Balsadami</a></li>
            <li class="center"><a href="#Capsulas">Capsulas</a></li>
            <li class="center"><a href="#Extractos">Extractos</a></li>
            <li class="center"><a href="#Jabones">Jabones</a></li>
            <li class="center"><a href="#Te">Té</a></li>
        </ul><br>
        <ul class="nav-links">
            <li class="center"><a href="#Jarabes">Jarabes</a></li>
            <li class="center"><a href="#Plantas">Plantas en frasco</a></li>
            <li class="center"><a href="#Pomadas">Pomadas</a></li>
            <li class="center"><a href="#Propoleo">Propóleo</a></li>
            <li class="center"><a href="#Tabletas">Tabletas</a></li>
            <li class="center"><a href="#Tonicos">Tónicos</a></li>
        </ul>
    </section>
    
    <section class="menu section bd-container" id="Aceites">
        <h2 class="product-title">Aceites Escenciales</h2>
            <div class="menu__container bd-grid">
                <?php      
                    showProduct::show_AceitesProducts();
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Balsadami">
        <h2 class="product-title">Balsadami</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_BalsadamiProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Capsulas">
        <h2 class="product-title">Capsulas</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_CapsulasProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Extractos">
        <h2 class="product-title">Extractos</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_ExtractosProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Jabones">
        <h2 class="product-title">Jabones</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_JabonesProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Te">
        <h2 class="product-title">Té</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_TeProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Jarabes">
        <h2 class="product-title">Jarabes</h2>
            <div class="menu__container bd-grid">
                <?php      
                    showProduct::show_JarabesProducts();
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Plantas">
        <h2 class="product-title">Plantas en frasco</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_PlantasProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Pomadas">
        <h2 class="product-title">Pomadas</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_PomadasProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Propoleo">
        <h2 class="product-title">Propóleo</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_PropoleoProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Tabletas">
        <h2 class="product-title">Tabletas</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_TabletasProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Tonicos">
        <h2 class="product-title">Tónicos</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_TonicosProducts();
                    
                ?>                
            </div>
    </section>
    </main>
<?php
connection::close_connection();
include_once DIRECTORIO_RAIZ.'/layouts/docend.inc.php';
?>