<?php
include_once 'app/connection.inc.php';
include_once 'app/products/showProduct.inc.php';


include_once 'layouts/doc.inc.php';
include_once 'layouts/navbar.inc.php';
?>

    <main class="l-main">
        <!--========== HOME ==========-->
        <section class="home" id="home">            
            <div class="home__container bd-container bd-grid">
                <div class="home__data">
                    <h1 class="home__title">VIDA</h1>
                    <h2 class="home__subtitle">Farmacia especializada en medicina natural y homeopática.</h2>
                    <a href="<?php echo ROUTE_CATALOGO?>" class="button">Ve Nuestro Catálogo</a>
                </div>
                <img src="assets/img/home.png" alt="" class="home__img">
                <span class="section-subtitle"> Deliza hacia abajo para más <i class='bx bxs-chevrons-down'></i></span>
            </div>
        </section>

        <!--========== Hiervas Medicinales ==========-->
        <section class="menu section bd-container" id="menu">
            <span class="section-subtitle">Nuestro Catálogo</span>
            <h2 class="section-title">Lo Último</h2>

            <div class="menu__container bd-grid">
                <?php
                    connection::open_connection();
                    showProduct::show_products();
                    connection::close_connection()
                ?>
                <br>
                <a href="<?php echo ROUTE_CATALOGO?>" class="button">Ver Todo <i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </section>
        <!--========== ABOUT ==========-->
        <section class="about section bd-container" id="about">
            <div class="about__container  bd-grid">
                <div class="about__data">
                    <span class="section-subtitle about__initial">Acerca de Nosotros</span>
                    <h2 class="section-title about__initial">La Naturaleza <br> al servicio de la salud.</h2>
                    <p class="about__description">Nos responsabilizamos a la acción de desarrollar medicamentos de origen natural y Homeopáticos para mejorar la calidad humana.</p>
                    <a href="<?php echo ROUTE_ACERCADE?>" class="button">Conoce mas.</a>
                </div>
                <img src="assets/img/about.jpg" alt="" class="about__img">
            </div>
        </section>

        <!--========== SERVICES ==========-->
        <section class="services section bd-container" id="services">
            <span class="section-subtitle">Nuestros Servicios</span>
            <h2 class="section-title">Le Ofrecemos a nuestros clientes</h2>

            <div class="services__container  bd-grid">
                <div class="services__content">
                    <h3 class="services__title">Herbolarea</h3>
                    <p class="services__description">Contamos a su disposición una gran cantidad de articulos naturales para su salud.</p>
                </div>

                <div class="services__content">
                    <h3 class="services__title">Homeopatía</h3>
                    <p class="services__description">Medicamentos Homeopáticos y naturales.</p>
                </div>

                <div class="services__content">
                    <h3 class="services__title">Recetas Naturales</h3>
                    <p class="services__description">Recetas alimenticias con hierbas medicinales y medicamentos naturales.</p>
                </div>
            </div>
        </section>



        <!--========== CONTACT US ==========-->
        <section class="contact section bd-container" id="contact">
            <div class="contact__container bd-grid">
                <div class="contact__data">
                    <span class="section-subtitle contact__initial">¿Tienes alguna duda?</span>
                    <h2 class="section-title contact__initial">Contactanos</h2>
                    <p class="contact__description">Si quieres comprar, preguntar o solicitar cualquier tipo de información, dejanos tus datos y nosotros nos comunicamos contigo.</p>
                </div>

                <div class="contact__button">
                    <a href="<?php echo ROUTE_CONTACTANOS?>" class="button">Contactanos ahora</a>
                </div>
            </div>
        </section>
    </main>

    <?php
    include_once 'layouts/docend.inc.php';
    ?>