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

        <link href="webroot/css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>
        <link href="webroot/css/bootstrap-responsive.css" rel="stylesheet">

        <script type="text/javascript" src="webroot/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/jquery.blockUI.js"></script>
        <script src="webroot/js/bootstrap.min.js"></script>
        <script src="webroot/Parsley.js-1.1.16/parsley.js"></script>

        <script type="text/javascript">
            /*
             * Prüft die Eingaben des Nutzers bereits vor dem Abschicken der 
             * Anmeldeinformationen.
             * @returns {Boolean}
             **/
            function checkUser() {
                // User ist valide
                if (
                        $('#benutzername').val() === "user" &&
                        $('#passwort').val() === "test")
                    return true;

                // User ist nicht valide
                /*
                 * Nur Benachrichtigung anzeigen, fall überhaupt 
                 * Anmeldeinformationen vorhanden sind.
                 **/
                if (
                        $('#benutzername').val() != "" &&
                        $('#passwort').val() != "")
                    $.growlUI('', 'Die Anmeldeinformationen sind nicht korrekt.');
                return false;
            }
        </script>
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