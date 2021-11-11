<?php
include_once '../../app/config.inc.php';
include_once DIRECTORIO_RAIZ.'/app/config.inc.php';
include_once DIRECTORIO_RAIZ.'/app/connection.inc.php';
include_once DIRECTORIO_RAIZ.'/app/contactRepo.inc.php';
include_once DIRECTORIO_RAIZ.'/app/redirect.inc.php';

if(isset($_GET['name_contact'])&&!empty($_GET['name_contact'])){
    $name = $_GET['name_contact'];
}else{
    redirect::redirectTo(SERVER); 
}

include_once DIRECTORIO_RAIZ.'/layouts/doc.inc.php';
include_once DIRECTORIO_RAIZ.'/layouts/navbar.inc.php'
?>
    <main class="l-main">
    <section class="home" id="home">            
            <div class="home__container bd-container bd-grid" style="display: block; padding-top: 10rem;">
                <div class="home__data" style="text-align:center;">
                    <h1 class="home__title">¡Gracias <?php echo $name;?>!</h1>
                    <h2 class="home__subtitle">Nos pondremos en contacto con usted lo más pronto posible, mientras tanto siga navengando en nuestra web.</h2>
                    <a href="<?php echo SERVER?>" class="button">Seguir Navengando</a>
                </div>
            </div>
        </section>
    </main>
<?php
include_once DIRECTORIO_RAIZ.'/layouts/docend.inc.php';
?>