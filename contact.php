---
layout: contact
title: WOZexperts
tagline: Kosteloos WOZ bezwaar
---

<div class="contact-header">
  <div class="container">
    <a href="aanmelden.php" class="btn btn-primary btn-large">direct aanmelden voor woz bezwaar</a>
  </div>
</div>

<section class="contact">
<div class="container">
    <div class="row-fluid">
        <div class="span8">
          <h2>We helpen u graag verder</h2>
          <p>Om zo snel mogelijk een antwoord op uw vraag te geven hebben we een aantal informatiebronnen samengesteld:
            <a href="faq.html">Veelgestelde vragen</a> </br>
            Als u er niet uitkomt kunt u via onderstaand formulier contact met ons opnemen. Als we er echt niet uitkomen bellen we u.
          </p>

         <?php
                   //init variables
                   $cf = array();
                   $sr = false;
            
                   if(isset($_SESSION['cf_returndata'])){
                     $cf = $_SESSION['cf_returndata'];
                     $sr = true;
                   }
            ?>

            <!-- Error & succes displays above the form -->
            <div id="errors" class="alert alert-error <?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
                      <a class="close" data-dismiss="alert">×</a>

              <ul>
                <li id="info">Er zijn problemen met het door u ingevulde formulier:</li>

                <?php 
                        if(isset($cf['errors']) && count($cf['errors']) > 0) :
                           foreach($cf['errors'] as $error) :
                        ?>
                <li><?php echo $error ?></li>
                <?php
                           endforeach;
                          endif;
                        ?>
              </ul>
            </div>

            <div id="success" class="alert alert-success <?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">
                      <a class="close" data-dismiss="alert">×</a>
                <p>Bedankt voor uw bericht. U hoort z.s.m. van ons.</p>
            </div>


            <form method="post" action="process.php" class="form-horizontal">
                <legend>Contact formulier</legend>
                <fieldset>
                    <div class="control-group">
                        <label for="name" class="control-label">Uw naam: <span class="required">*</span></label>
                        <div class="controls">
                            <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="Naam" required autofocus />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="email" class="control-label">Emailadres: <span class="required">*</span></label>
                        <div class="controls">
                            <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="voorbeeld@gmail.com" required />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="telephone" class="control-label">Telefoon: </label>
                        <div class="controls">
                            <input type="tel" id="telephone" name="telephone" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['telephone'] : '' ?>" />
                        </div>
                    </div>
                    <div class="control-group">                
                        <label for="message" class="control-label">Bericht: <span class="required">*</span></label>
                        <div class="controls">
                            <textarea id="message" name="message" placeholder="Uw bericht moet minimaal 20 tekens bevatten" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea>
                        </div>
                    </div>
                <span id="loading"></span>
                <input type="submit" value="Verstuur" id="submit-button" class="btn btn-primary btn-large" />
                <p id="req-field-desc"><span class="required">*</span> Vereist veld</p>
                </fieldset>
            </form>
            <?php unset($_SESSION['cf_returndata']); ?>
           
     </div>
     <div class="span4">
        <img src="http://0.s3.envato.com/files/4900644/andresr21212.jpg">
         <address>
                  <strong>De WOZexperts</strong><br>
                  Van Ostadelaan 91<br>
                  1701 LH Heerhughowaard SB Zoetermeer<br>
                  <abbr title="Telefoon">T:</abbr> 079 -316 16 66
                </address>
                 
                <address>
                  <strong>Email</strong><br>
                  <a href="mailto:#">info@dewozexperts.nl</a>
                </address>
        </div>
    </div>
</div>
</section>
