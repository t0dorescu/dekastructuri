<?php
    session_start();
    if (isset($_REQUEST['lang'])) {
        $_SESSION['lang'] = $_REQUEST['lang'];
    }
?>
<?php include 'languages.php' ?>
<?php include 'functions.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= t('Deka Structuri') ?></title>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <!--JS-->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/camera.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script>
        $(document).ready(function(){
            jQuery('.camera_wrap').camera();
            function goToByScroll(id){$('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');}
        });
    </script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <!--[if lt IE 8]>
    <div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>
    <![endif]-->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="css/ie.css">
    <link rel="stylesheet" href="css/docs.css">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- fancybox -->
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>

    <style>
        header {
            position: fixed !important;
            width: 100%;
            z-index: 999 !important;
        }
    </style>

</head>
<body>
<div class="global">
    <!--header-->
    <header>
        <div class="container">
            <div class="navbar navbar_ clearfix">
                <div class="navbar-inner">
                    <div class="clearfix">
                        <h1 style="font-size: 32px; float: left; margin-top: 25px; position: relative;">
                            <a href="index.php">
                                <span style="color: #00AEEF;">Deka</span>
                                <span style="color: #ffffff;">Structuri</span>
                            </a>
                            <span style="font-size: 1rem; position: absolute; left: 0; top: 1.5rem;">Website in constructie ...</span>
                        </h1>
                        <style>
                            .language {
                                margin-top: 5px;
                                float: right;
                            }
                            .language ul li {
                                list-style-type:  none;
                            }
                            .language ul li a {
                                color: #fff;
                            }
                            .language ul li a img {
                                margin-right: 7px;
                            }
                        </style>
                        <div class="language">
                            <ul>
                                <li>
                                    <a href="?lang=ro">
                                        <img src="img/ro.jpg" /> <?= t('Romana') ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="?lang=hu">
                                        <img src="img/hu.gif" /> <?= t('Maghiara') ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="?lang=en">
                                        <img src="img/en.gif" /> <?= t('Engleza') ?>
                                    </a>
                                </li>
                                <li>
                                    <a href="?lang=de">
                                        <img src="img/de.png" /> <?= t('Germana') ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="nav-collapse nav-collapse_ collapse">
                            <ul class="nav sf-menu clearfix">
                                <li <?= ($page == 'index') ? 'class="active"' : '' ?>><a href="index.php"><?= t('Acasa') ?></a></li>
                                <li <?= ($page == 'despre') ? 'class="active"' : '' ?>><a href="despre.php"><?= t('Despre') ?></a></li>
                                <li <?= ($page == 'proiecte-in-executie') ? 'class="active"' : '' ?>><a href="proiecte-in-executie.php"><?= t('Proiecte in executie') ?></a></li>
                                <li <?= ($page == 'proiecte-finalizate') ? 'class="active"' : '' ?>><a href="proiecte-finalizate.php"><?= t('Proiecte finalizate') ?></a></li>
                                <li <?= ($page == 'certificari') ? 'class="active"' : '' ?>><a href="certificari.php"><?= t('Certificari') ?></a></li>
                                <li <?= ($page == 'contact') ? 'class="active"' : '' ?>><a href="contact.php"><?= t('Contact') ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
