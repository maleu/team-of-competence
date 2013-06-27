<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <title>iColoris - Website</title>
        <?php
        include("nav.js");
        ini_set("display_errors", "1");
        error_reporting(E_ALL);

        /*
         * Ließt die übergebene Benutzerrolle aus, um eine angepasste Ausgabe
         * zu ermöglichen. Initialisiert sie mit einem leeren Wert, falls
         * keine Benutzerrolle übergeben wurde.
         */
        $role = isset($_GET['role']) ? $_GET['role'] : '';
        ?>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="CRM/crm_style.css">
        <link rel="stylesheet" type="text/css" href="dashboard_style.css">
        <link rel="stylesheet" type="text/css" href="ERP/Lagereinkauf.css">
        <link rel="stylesheet" type="text/css" href="webroot/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="webroot/css/anmeldung.css">
        <link rel="stylesheet" type="text/css" href="webroot/css/default.css">
        
        <script type="text/javascript" src="webroot/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/jquery.blockUI.js"></script>
        <script type="text/javascript" src="webroot/js/icoloris.js"></script>
        <!--<script type="text/javascript" src="nav.js"></script>-->
        <script type="text/javascript" src="/path/to/jquery.tablesorter.js"></script>
        <script type="text/javascript" src="webroot/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                loadHomepage();
            });
        </script>
    </head>
    <body>

        <div class=container>

            <div class=header>

                <img src="001_images/LogoSky.png" class="img-rounded" style="">

                <div class="btn-toolbar" style="float:right;">
                    <div class="btn-group">
                        <?php if($role != ''){ ?><a class="btn btn-info" href="javascript:$.growlUI('', 'Sie haben Post in Ihrem Postfach zur Abholung bereitliegen.');"><i class="icon-envelope"></i>Nachrichten</a><?php } ?>
                        <a class="btn" href="./"><i class="icon-fullscreen"></i> <?= ($role != '')?'Logout':'Login'; ?></a>      
                    </div>
                </div>

                <div class="btn-toolbar" style="float:right; margin-right: 30px;">
                    <div class="btn-group">
                        <a class="btn"><i class="icon-question-sign"></i> FAQ</a>
                        <a class="btn" href="mailto:support@icoloris.tk?subject=iColoris - Kontaktanfrage"><i class="icon-comment"></i> Kontakt</a>
                    </div>
                </div>
            </div>
            <div class=body>
                <div class="navbar">
                    <div class="navbar-inner">
                        <!--<div class="container">-->
                            <ul class="nav">

                                <?php
                                switch ($role) {
                                    case "admin":
                                    case "gf":
                                        ?>
                                        <!-- Hier wird wahrscheinlich das Dashboard angezeigt: -->
                                        <li><a href="javascript:loadHomepage();">Startseite</a></li>
                                        <!-- Alle sonstigen Seiten -->
                                        <li><a href="#" onclick="loadUrlaub();">Urlaub</a></li> 
                                        <li><a href="javascript:loadPage('FIBU/index_personalmanagement.php', 'content');">Personalmanagement</a></li>
                                        <li><a href="javascript:loadCRM('1');">CRM</a></li>
										<li><a href="javascript:loadErpKundenBestellung();">Kundenbestellung</a></li>
                                        <li><a href="javascript:loadErpLagereinkauf();">Artikel kaufen & verwalten</a></li>
                                        <li><a href="javascript:loadPage('ERP/Versandt/index_versandt.php', 'content');">Versand</a></li>
                                        <?php
                                        break;
                                    case "fibu":
                                        ?>
                                        <li><a href="javascript:loadHomepage();">Startseite</a></li>                             
                                        <li><a href="#" onclick="loadUrlaub();">Urlaub</a></li> 
                                        <li><a href="javascript:loadPage('FIBU/index_finanzbuchhaltung.php', 'content');">Finanzbuchhaltung</a></li>
                                        <?php
                                        break;
                                    case "hr":
                                        ?>
                                        <li><a href="javascript:loadHomepage();">Startseite</a></li>
                                        <li><a href="#" onclick="loadUrlaub();">Urlaub</a></li> 
                                        <li><a href="javascript:loadPage('FIBU/index_personalmanagement.php', 'content');">Personalmanagement</a></li>
                                        <?php
                                        break;
                                    case "lager":
                                        ?>
                                        <li><a href="javascript:loadHomepage();">Startseite</a></li>
                                        <li><a href="#" onclick="loadUrlaub();">Urlaub</a></li> 
                                        <li><a href="javascript:loadCRMmain('1');">CRM</a></li>
										<li><a href="javascript:loadErpKundenBestellung();">Kundenbestellung</a></li>
                                        <li><a href="javascript:loadErpLagereinkauf();">Artikel kaufen & verwalten</a></li>
                                        <li><a href="javascript:loadPage('ERP/Versandt/index_versandt.php', 'content');">Versand</a></li>
                                        <?php
                                        break;
                                }
                                ?>

                            </ul>
                        <!--</div>-->
                    </div>
                </div>

                <?php if ($role === '') { ?>
                    Sie sind nicht angemeldet, bitte über <a href='./'>Anmelden</a> fortfahren.
                <?php } else { ?>
                    <div id="content" class=content>

                    </div>
                <?php } ?>

            </div>
        </div>

    </body>

</html>
