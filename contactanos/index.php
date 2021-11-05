<?php
include_once '../app/connection.inc.php';
include_once '../app/contactanos.inc.php';
include_once '../app/contactRepo.inc.php';
include_once '../app/contactValidation.inc.php';

if(isset($_POST['send'])){
    connection :: open_connection();
    $validator = new contactValidation($_POST['name_contact'],
    $_POST['email_contact'],$_POST['phone_contact'],$_POST['description_contact']);

    if($validator -> valid_contact()){
        $contact = new contactanos('', $validator->getName_contact(), $validator->getEmail_contact(),
        $validator->getPhone_contact(),$validator->getDescription_contact(),'');
        $insert = contactRepo :: insert(connection :: get_connection(), $contact);

        if($insert){
            
        }
    }
    connection :: close_connection();
}

$title ='Contáctanos - ';
include_once '../layouts/doc.inc.php';
include_once '../layouts/navbar.inc.php'
?>
<main class="l-main">
    <section class="contact section bd-container" id="contact">
            <div class="contact__container  bd-container bd-grid">
                <div class="contact__data">                    
                    <h2 class="home__title">Contáctanos</h2>
                    <p class="contact__description">Puedes mandarnos mensaje por:</p>
                    <div>
                        <a href="https://www.facebook.com/farmacianaturistavida" class="footer__social"><i class='bx bxl-facebook'></i></a>
                        <a href="https://www.instagram.com/farmacianaturistavida" class="footer__social"><i class='bx bxl-instagram'></i></a>
                        <a href="https://bit.ly/3bwpekV" class="footer__social"><i class='bx bxl-whatsapp'></i></a>
                    </div>
                    <p class="contact__description">O mandanos tu información y nos pondremos en contacto contigo.</p>
                    <div>
                        <form role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                           <?php
                            if(isset($_POST['send'])){
                                include_once '../layouts/formValidateContact.php';
                            } else {
                                include_once '../layouts/formEmptyContact.php';
                            }
                           ?>
                        </form>
                    </div>
                </div>
                <div>
                    <p class="about__description">Visitanos en:</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2632.44275407083!2d-101.62896167366769!3d21.079201627199794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842bbe1ca271bc7b%3A0x9b72b2e025a7ec6!2sBlvd.%20Omega%201116%2C%20Industrial%20Delta%20Sur%2C%2037549%20Le%C3%B3n%2C%20Gto.!5e0!3m2!1ses-419!2smx!4v1635731920594!5m2!1ses-419!2smx" allowfullscreen="" loading="lazy"></iframe>
                </div>
                
            </div>
        </section>
    </main> 
<?php
include_once '../layouts/docend.inc.php';
?>