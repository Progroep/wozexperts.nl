---
layout: default
title: WOZcontroledienst
tagline: 
---
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