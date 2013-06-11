<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <title>iColoris - Website</title>
        <?php
        include("nav.js");
        ini_set("display_errors", "1");
        error_reporting(E_ALL);
        ?>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href="CRM/crm_style.css" rel="stylesheet" type="text/css">
        <link href="ERP/Lagereinkauf.css" rel="stylesheet" type="text/css">
        <link href="webroot/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="webroot/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/jquery.blockUI.js"></script>
        <script type="text/javascript" src="webroot/js/icoloris.js"></script>
        <script src="webroot/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                loadHomepage();
            });
        </script>
    </head>
    <body>

        <div class=container>

            <div class=header>
                <!--                <div class=logo>
                
                                </div>-->

                <img src="001_images/LogoSky.png" class="img-rounded" style="">

                <!--                <div class=headerRight>
                                    <div class=headerMenu>
                                        <div class=headerMenuElement>
                                            FAQ
                                        </div>
                                        <div class=headerMenuElement>
                                            Kontakt
                                        </div>
                
                                    </div>
                                    <div class=headerAccount>
                                        <ul>
                                            <li>Logout</li>
                                        </ul>
                                    </div>
                                </div>-->

                <div class="btn-toolbar" style="float:right;">
                    <div class="btn-group">
                        <a class="btn"><i class="icon-question-sign"></i> FAQ</a>
                        <a class="btn"><i class="icon-comment"></i> Kontakt</a>
                        <a class="btn"><i class="icon-fullscreen"></i> Logout</a>      
                    </div>
                </div>

<!--                <table style="float:right; margin-right: 50px;">
                    <tr>
                        <td style="padding: 10px;"></td>
                        <td style="padding: 10px;"><a class="btn btn-small"><i class="icon-comment"></i>Kontakt</a></td>
                        <td style="padding: 10px;"><a class="btn btn-small"><i class="icon-fullscreen"></i>Logout</a></td>
                    </tr>
                </table>-->

            </div>
            <div class=body>
                <!--                <div class=hauptnav>
                                    <div class=hauptNavElement onclick="loadHomepage()">
                                        Startseite
                                    </div>
                                    <div class=hauptNavElement onclick="loadCRMmain('1');">
                                        CRMmain
                                    </div>
                                    <div class=hauptNavElement onclick="loadCRMtest();">
                                        CRMtest
                                    </div>
                                    <div class=hauptNavElement onclick="loadErpLagereinkauf();">
                                        Lagereinkauf
                                    </div>
                
                                    <div class="hauptNavElement" onClick="javascript:loadPage('FIBU/index_personalmanagement.php', 'content');">Personalmanagement</div>
                
                                    <div class="hauptNavElement" onClick="javascript:loadPage('FIBU/index_finanzbuchhaltung.php', 'content');">Finanzbuchhaltung</div>
                
                                </div>-->

                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <ul class="nav">
                                <?php if($_GET['role'] == "admin" || $_GET['role'] == "gf"){?><li><a href="javascript:loadHomepage();">Startseite</a></li><?php } ?>
                                <li><a href="javascript:loadCRMmain('1');">CRMain</a></li>
                                <li><a href="javascript:loadCRMtest();">CRMtest</a></li>
                                <li><a href="javascript:loadErpLagereinkauf();">Lagereinkauf</a></li>
                                <li><a href="javascript:loadPage('FIBU/index_personalmanagement.php', 'content');">Personalmanagement</a></li>
                                <li><a href="javascript:loadPage('FIBU/index_finanzbuchhaltung.php', 'content');">Finanzbuchhaltung</a></li>
                                
                                <li><a href="javascript:loadPage('ERP/Versandt/index_versandt.php', 'content');">Versand</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr>
                <div id="content" class=content>
                    Wird ersetzt.
                </div>
            </div>
        </div>

    </body>

</html>
