<div>
    <label for="name_contact" class="" >Nombre:</label>
    <input type="text" id="name" name="name_contact" <?php $validator -> showName_contact()?>>
    <?php $validator -> showError_name_contact()?>
</div>
<div><br>
    <label for="email_contact" class="">Correo electrónico:</label>
    <input type="email" id="mail" name="email_contact" <?php $validator -> showEmail_contact()?>>
    <?php $validator -> showError_email_contact()?>
</div>
<div><br>
    <label for="phone_contact" class="">Teléfono:</label>
    <input type="text" id="mail" name="phone_contact" <?php $validator -> showPhone_contact()?>>
    <?php $validator -> showError_phone_contact()?>
</div>
<div><br>
    <label for="description_contact" class="">Mensaje:</label>
    <textarea id="msg" name="description_contact" rows="10" <?php $validator -> showDescription_contact()?>></textarea>
    <?php $validator -> showError_description_contact()?>
</div>                            
<button type="submit" class="button" name="send">Enviar</button>