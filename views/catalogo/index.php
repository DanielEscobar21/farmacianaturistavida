<?php
include_once '../../app/config.inc.php';
include_once DIRECTORIO_RAIZ.'/app/connection.inc.php';
include_once DIRECTORIO_RAIZ.'/app/products/showProduct.inc.php';

$title ='Productos - ';

include_once DIRECTORIO_RAIZ.'/layouts/doc.inc.php';
include_once DIRECTORIO_RAIZ.'/layouts/navbar.inc.php'
?>

<main class="l-main"> 
    <section class="menu section bd-container">
    <h2 class="section-title">Nuestros Productos</h2>
    </section>    
    <section class="about section bd-container" id="about">
            <div class="about__container  bd-grid">
                <div class="about__data">
                    <span class="section-subtitle about__initial">Productos</span>
                    <h2 class="section-title about__initial">Homeopáticos</h2>
                    <p class="about__description">La homeopatía es un sistema de medicina natural donde su proposito es dar a entender que la mente, el cuerpo y el espíritu de la persona se ven afectados en su conjunto cuando esta sufre una enfermedad</p>
                    <a href="<?php echo ROUTE_CATALOGO_HOMEOPATICOS?>" class="button">Ver todos.</a>
                </div>
                <img src="../../assets/img/homeopatia.jpg" alt="" class="about__img">
            </div>
        </section>
    </main>   
    <section class="about section bd-container" id="about">
            <div class="about__container  bd-grid">
            <img src="../../assets/img/hervolarea.jpg" alt="" class="about__img">
                <div class="about__data">
                    <span class="section-subtitle about__initial">Productos</span>
                    <h2 class="section-title about__initial">Fitoterápicos </h2>
                    <p class="about__description">Una hierba es una planta o una parte de una planta que se usa por su aroma, sabor o propiedades terapéuticas. Los productos de la medicina herbolaria son suplementos dietéticos. Se venden como píldoras, cápsulas, polvos, tés, extractos o como plantas frescas o secas. Las personas las toman para mejorar su salud.</p>
                    <a href="<?php echo ROUTE_CATALOGO_FITOTERAPICOS?>" class="button">Ver todos.</a>
                </div>
                
            </div>
        </section>
    </main>
<?php
include_once DIRECTORIO_RAIZ.'/layouts/docend.inc.php';
?>