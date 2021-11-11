<?php
include_once '../../app/config.inc.php';
include_once DIRECTORIO_RAIZ.'/app/connection.inc.php';
include_once DIRECTORIO_RAIZ.'/app/products/showProduct.inc.php';

$title ='Catálogo - ';

include_once DIRECTORIO_RAIZ.'/layouts/doc.inc.php';
include_once DIRECTORIO_RAIZ.'/layouts/navbar.inc.php'
?>

<main class="l-main"> 
    <section class="menu section bd-container">
    <h2 class="section-title">Nuestros Productos</h2>
        <ul class="nav-links">
            <li class="center"><a href="#">Homeopáticos</a></li>
            <li class="center"><a href="#">Herbolareos</a></li>
            <li class="center"><a href="#">Naturistas</a></li>
            <li class="center"><a href="#">Canabicos</a></li>
        </ul>
    </section>
    
    <section class="menu section bd-container" id="homeopatia">
        <h2 class="product-title">Homeopatía</h2>
            <div class="menu__container bd-grid">
                <?php        
                    connection::open_connection();
                    showProduct::show_Allproducts();
                    connection::close_connection();
                ?>                
            </div>
    </section>

    <section class="menu section bd-container" id="Herbolareos">
            <h2 class="Herbolarea">Nuestro Catálogo</h2>

            <div class="menu__container bd-grid">
                <?php
                ?>
                <br>
                <a href="<?php echo ROUTE_CATALOGO?>" class="button">Ver Todo <i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </section>
    </main>
<?php
include_once DIRECTORIO_RAIZ.'/layouts/docend.inc.php';
?>