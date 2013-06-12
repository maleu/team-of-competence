<?php
/**
 * Description of index3
 *
 * @author Martin Leuthold
 */
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>iColoris - Anmeldebildschirm</title>

        <link rel="stylesheet" type="text/css" href="webroot/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="webroot/css/anmeldung.css">
        <link rel="stylesheet" type="text/css" href="webroot/css/bootstrap-responsive.css">

        <script type="text/javascript" src="webroot/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/jquery.blockUI.js"></script>
        <script type="text/javascript" src="webroot/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="webroot/Parsley.js-1.1.16/parsley.js"></script>
        <script type="text/javascript" src="webroot/js/anmeldung.js"></script>

    </head>
    <body>
        <div class="container">

            <form 
                method="post" 
                action="indexCheck.php" 
                onsubmit="return checkUser()"
                class="form-signin" 
                id="demo-form" 
                data-validate="parsley">

                <img src="001_images/LogoSky.png" class="img-rounded">

                <h2 class="form-signin-heading">Anmeldebildschirm</h2>

                Benutzername:
                <input type="text" class="input-block-level" 
                       placeholder="Benutzername" 
                       id="benutzername" 
                       name="benutzername" 
                       data-required="true" 
                       data-required-message="Bitte geben Sie einen Benutzernamen ein.">

                Passwort:
                <input type="password" class="input-block-level" 
                       placeholder="Passwort" 
                       id="passwort" 
                       name="passwort" 
                       data-required="true" 
                       data-required-message="Bitte geben Sie ein Passwort ein.">

                Geschäftsbereich:
                <select class="input-block-level" name="rolle">
                    <option value="gf">Geschäftsführung</option>
                    <option value="fibu">Finanzbuchhaltung</option>
                    <option value="hr">Personalmanagement</option>
                    <option value="lager">Lagerverwaltung</option>
                </select>

                <button class="btn btn-large btn-primary" type="submit">anmelden</button>
            </form>
        </div>
    </body>
</html>