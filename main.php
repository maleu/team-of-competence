<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <?php
        include("nav.js");
        ini_set("display_errors", "1");
        error_reporting(E_ALL);
        ?>
        <link href="index.css" rel="stylesheet" type="text/css">
        <link href="CRM/crm_style.css" rel="stylesheet" type="text/css">
        <link href="ERP/Lagereinkauf.css" rel="stylesheet" type="text/css">
        <!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
        <script type="text/javascript" src="webroot/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="webroot/js/jquery.blockUI.js"></script>
        <script type="text/javascript" src="webroot/js/icoloris.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                loadHomepage();
            });
        </script>
    </head>
    <body>

        <div class=container>

            <div class=header>
                <div class=logo>

                </div>
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

                <table style="float:right; margin-right: 50px;">
                    <tr>
                        <td style="padding: 10px;">FAQ</td>
                        <td style="padding: 10px;">Kontakt</td>
                        <td style="padding: 10px;">Logout</td>
                    </tr>
                </table>

            </div>
            <div class=body>
                <div class=hauptnav>
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

                </div>
                <hr>
                <div id="content" class=content>
                    Wird ersetzt.
                </div>
            </div>
        </div>
    </body>

</html>
