<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WOZcontroledienst | </title>
        
        <meta name="viewport" content="width=device-width">


<!--_____  ____  _    ___          ________  _____ _______       _____  
  / ____|/ __ \| |  | \ \        / /  ____|/ ____|__   __|/\   |  __ \ 
 | |  __| |  | | |  | |\ \  /\  / /| |__  | (___    | |  /  \  | |  | |
 | | |_ | |  | | |  | | \ \/  \/ / |  __|  \___ \   | | / /\ \ | |  | |
 | |__| | |__| | |__| |  \  /\  /  | |____ ____) |  | |/ ____ \| |__| |
  \_____|\____/ \____/    \/  \/   |______|_____/   |_/_/    \_\_____/ 
                                                              
      |\/|  _. ._ |   _ _|_ o ._   _    ()    |\/|  _   _| o  _. 
      |  | (_| |  |< (/_ |_ | | | (_|   (_X   |  | (/_ (_| | (_| 
                                   _|                            
                          © www.gouwestadmm.nl
-->

    
  <script src="http://progroep.github.com/max4u/js/vendor/jquery-1.8.2.min.js"></script>
  <link rel="stylesheet" href="less/style.css">

  <!--<link rel="stylesheet/less" href="less/style.less">
  <script src="http://progroep.github.com/max4u/js/libs/less-1.3.0.min.js"></script>-->

  <!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>

   <script src="http://progroep.github.com/max4u/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

</head>

<body >

 <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    <div class="container">
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.html"><img src="img/logo.png"/></a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li class="active"><a href="index.html">Home</a></li>
               <li><a href="werkwijze.html">onze werkwijze</a></li>
              <li><a href="voordeel.html">uw voordeel</a></li>
              <li><a href="faq.html">veelgestelde vragen</a></li>
          
              <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
              <li>
                <a href="contact.php">contact</a>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
    </div><!-- /.container -->



<div class="contact-header">
</div>

<section>
    <div class="container">
        <div class="row-fluid">
            <div class="span8">

<?php

    if(function_exists('date_default_timezone_set')) { date_default_timezone_set('Europe/Amsterdam'); }
    define('LF', "\n");

    // Get a value from the $_POST array (case insensitive!!)
    function getPost($key, $trim = false, $lowercase = false, $int = false)
    {
        if(isset($_POST[$key]))
        {
            $v = stripslashes($_POST[$key]);

            if($trim)
            {
                $v = trim($v);
            }

            if($int)
            {
                $v = intval($v);
            }
            elseif($lowercase)
            {
                $v = strtolower($v);
            }

            return $v;
        }
        
        return '';
    }

    // Default values
    $field_1 = 'Particulier met 1 woning';
    $field_2 = '';
    $field_3 = '';
    $field_4 = '';
    $field_5 = 'Bezwaar tegen de WOZ-waarde';
    $field_6 = '';
    $field_7 = '';
    $field_8 = '';
    $field_9 = '';
    $field_10 = '';
    $field_11 = '';

    $sHtml = '';
    $sFormError = '';

    // Process form
    if(empty($_POST['form']) == false)
    {
        $field_1 = getPost('field_1', true);
        if(in_array($field_1, array('Particulier met 1 woning', 'particulier met meerdere woningen', 'bedrijf of instelling')) == false) { $sFormError = 'Selecteer a.u.b. een geldige waarde.'; }        $field_2 = getPost('field_2', true);
        if(strlen($field_2) == 0) { $sFormError = 'Vul a.u.b. alle verplichte velden in.'; }
        $field_3 = getPost('field_3', true);
        if(strlen($field_3) == 0) { $sFormError = 'Vul a.u.b. alle verplichte velden in.'; }
        $field_4 = getPost('field_4', true);
        if(strlen($field_4) == 0) { $sFormError = 'Vul a.u.b. alle verplichte velden in.'; }
        $field_5 = getPost('field_5', true);
        if(in_array($field_5, array('Bezwaar tegen WOZ-waarde', 'ik ben dit jaar eigenaar geworden', 'mijn bezwaar is afgewezen')) == false) { $sFormError = 'Selecteer a.u.b. een geldige waarde.'; }        $field_6 = getPost('field_6', true);
        $field_7 = getPost('field_7', true);
        $field_8 = getPost('field_8', true);
        $field_9 = getPost('field_9', true);
        $field_10 = getPost('field_10', true);
        $field_11 = getPost('field_11', true);
    }

    // Show form
    if(empty($_POST['form']) || $sFormError)
    {
       $sHtml .= '<form action="" method="post">
<input name="form" type="hidden" value="form1">
<h1>Vul a.u.b. het onderstaande formulier in</h1>
' . $sFormError . '
<table class="table"><tr>
<td align="left" valign="top">U wilt zich inschrijven als</td>
<td align="left" valign="top"><select name="field_1"><option' . ((strcmp($field_1, 'Particulier met 1 woning') === 0) ? ' selected="selected"' : '') . ' value="Particulier met 1 woning">Particulier met 1 woning</option><option' . ((strcmp($field_1, 'particulier met meerdere woningen') === 0) ? ' selected="selected"' : '') . ' value="particulier met meerdere woningen">particulier met meerdere woningen</option><option' . ((strcmp($field_1, 'bedrijf of instelling') === 0) ? ' selected="selected"' : '') . ' value="bedrijf of instelling">bedrijf of instelling</option></select></td>
</tr>
<tr>
<td align="left" valign="top">Volledige naam *</td>
<td align="left" valign="top"><input name="field_2" type="text" value="' . htmlentities($field_2) . '"></td>
</tr>
<tr>
<td align="left" valign="top">Emailadres *</td>
<td align="left" valign="top"><input name="field_3" type="text" value="' . htmlentities($field_3) . '"></td>
</tr>
<tr>
<td align="left" valign="top">Telefoonnummer *</td>
<td align="left" valign="top"><input name="field_4" type="text" value="' . htmlentities($field_4) . '"></td>
</tr>
<tr>
<td align="left" valign="top">Doel van de aanvraag</td>
<td align="left" valign="top"><select name="field_5"><option' . ((strcmp($field_5, 'Bezwaar tegen WOZ-waarde') === 0) ? ' selected="selected"' : '') . ' value="Bezwaar tegen WOZ-waarde">Bezwaar tegen WOZ-waarde</option><option' . ((strcmp($field_5, 'ik ben dit jaar eigenaar geworden') === 0) ? ' selected="selected"' : '') . ' value="ik ben dit jaar eigenaar geworden">ik ben dit jaar eigenaar geworden</option><option' . ((strcmp($field_5, 'mijn bezwaar is afgewezen') === 0) ? ' selected="selected"' : '') . ' value="mijn bezwaar is afgewezen">mijn bezwaar is afgewezen</option></select></td>
</tr>
<tr>
<td align="left" valign="top">Aanschafwaarde</td>
<td align="left" valign="top"><input name="field_6" type="text" value="' . htmlentities($field_6) . '"></td>
</tr>
<tr>
<td align="left" valign="top">Adres</td>
<td align="left" valign="top"><input name="field_7" type="text" value="' . htmlentities($field_7) . '"></td>
</tr>
<tr>
<td align="left" valign="top">Postcode</td>
<td align="left" valign="top"><input name="field_8" type="text" value="' . htmlentities($field_8) . '"></td>
</tr>
<tr>
<td align="left" valign="top">Plaats</td>
<td align="left" valign="top"><input name="field_9" type="text" value="' . htmlentities($field_9) . '"></td>
</tr>
<tr>
<td align="left" valign="top">Toelichting</td>
<td align="left" valign="top"><textarea name="field_10">' . htmlentities($field_10) . '</textarea></td>
</tr>
<tr>
<td align="left" valign="top">&nbsp;</td>
<td align="left" valign="top"><input type="submit" class="btn btn-large btn-primary" value="Verzenden"></td>
</table>
</form>';
    }
    else // Send form
    {
        $mail_to = 'info@wozcontroledienst.nl';
        $mail_from = 'info@wozcontroledienst.nl';
        $mail_subject = 'Formuliergegevens van wozcontroledienst.nl';
        $mail_message = 'Formuliergegevens: ' . LF . LF 
. 'U wilt zic h inschrijven als: ' . $field_1 . LF
. 'Volledige naam:         ' . $field_2 . LF
. 'Emailadres:             ' . $field_3 . LF
. 'Telefoonnummer:         ' . $field_4 . LF
. 'Doel van de aanvraag:   ' . $field_5 . LF
. 'Aanschafwaarde:         ' . $field_6 . LF
. 'Aanschafdatum:          ' . $field_7 . LF
. 'Adres:                  ' . $field_8 . LF
. 'Postcode:               ' . $field_9 . LF
. 'Plaats:                 ' . $field_10 . LF
. 'Toelichting:            ' . $field_11 . LF
. LF 
. 'IP: ' . $_SERVER['REMOTE_ADDR'] . ', Datum: ' . date('d-m-Y') . ', Tijd: ' . date('H:i:s');

        mail($mail_to, $mail_subject, $mail_message, 'From: ' . $mail_from);

        $sHtml .= '<h1>Formulier verzonden</h1><p>Hartelijk dank voor het invullen van het formulier.</p>';
    }

    echo $sHtml;

?>

            </div>
            <div class="span4">
                <img src="../img/contact.jpg">
            </div>
        </div>
    </div>
</section>


<section id="pre-footer">
  <div class="container center">
    <div class="row-fluid">
      <div class="span12">
        <h3>Een persoonlijk, zorgvuldig en deskundig bezwaar?</h3>
        <div class="row-fluid">
          <div class="span3">
          </div>
          <div class="span6">
            <h5>Meldt u nu aan en wij starten <strong>direct</strong> een kosteloze WOZ bezwaarprocedure voor u op.
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="row-fluid btns">
      <div class="span2">
      </div>
      <div class="span4">
        <a href="aanmelden.php" class="btn btn-primary btn-large btn-block">direct aanmelden</a>
      </div>
      <div class="span4">
        <a href="werkwijze.html" class="btn btn-info btn-large btn-block">lees meer over onze werkwijze</a>
      </div>
    </div>
  </div>
</section>
 

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
          <p class="pull-right"><a href="#">Back to top</a></p>
          <p>&copy; 2013 WOZcontroledienst | WOZcontroledienst is een onderdeel van Florissant Wonen</p>
        </div>
      </div>
    </div>
  </footer>




  <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="http://progroep.github.com/max4u/js/vendor/jquery-1.8.2.min.js"><\/script>')</script> -->

    <script src="http://progroep.github.com/max4u/js/main.js"></script>
   

    <script src="http://progroep.github.com/max4u/js/vendor/responsiveslides.min.js"></script>
    <link rel="stylesheet" href="http://progroep.github.com/max4u/js/vendor/responsiveslides.css" />
        <script>
    $(function () {

      // Slideshow 1
      $("#slider1").responsiveSlides({
        speed: 1800,
        nav: true,
        prevText: "",
        nextText: ""
      });
      
    });
  </script>

      
        <script src="js/vendor/jquery.stellar.min.js"></script>
        <script src="js/vendor/waypoints.min.js"></script>
        <script src="js/vendor/jquery.easing.1.3.js"></script>
        <script src="http://progroep.github.com/max4u/js/vendor/bootstrap.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39007202-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
  <script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>
