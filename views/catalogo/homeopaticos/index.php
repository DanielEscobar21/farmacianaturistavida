<?php
include_once '../../../app/config.inc.php';
include_once DIRECTORIO_RAIZ.'/app/connection.inc.php';
include_once DIRECTORIO_RAIZ.'/app/products/showProduct.inc.php';

$title ='Productos Homeopáticos - ';

include_once DIRECTORIO_RAIZ.'/layouts/doc.inc.php';
include_once DIRECTORIO_RAIZ.'/layouts/navbar.inc.php';
connection::open_connection();
?>

<main class="l-main"> 
    <section class="menu section bd-container">
    <h2 class="section-title">Nuestros Productos Homopaticos</h2>
        <ul class="nav-links">
            <li class="center"><a href="#Disoluciones">Disoluciones</a></li>
            <li class="center"><a href="#Vitaminas">Vitaminas</a></li>
            <li class="center"><a href="#Organoterapicos">Organoterápicos</a></li>
            <li class="center"><a href="#Tinturas">Tinturas</a></li>
            <li class="center"><a href="#Impregnaciones">Impregnaciones</a></li>
        </ul>
    </section>
    
    <section class="menu section bd-container" id="Disoluciones">
        <h2 class="product-title">Disoluciones</h2>
            <div class="menu__container bd-grid">
                <?php      
                    showProduct::show_DisolutionProducts();
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Vitaminas">
        <h2 class="product-title">Vitaminas</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_VitamineProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Organoterapicos">
        <h2 class="product-title">Organoterápicos</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_OrganoProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Tinturas">
        <h2 class="product-title">Tinturas</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_TinturesProducts();
                    
                ?>                
            </div>
    </section>
    <section class="menu section bd-container" id="Impregnaciones">
        <h2 class="product-title">Impregnaciones</h2>
            <div class="menu__container bd-grid">
                <?php
                    showProduct::show_ImpregProducts();
                    
                ?>                
            </div>
    </section>
    </main>
<?php
connection::close_connection();
include_once DIRECTORIO_RAIZ.'/layouts/docend.inc.php';
?>