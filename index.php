<?php
/**
 * A very simple status board created in PHP.
 * Can check the status of a list of domains.
 *
 * Code, example usage information, and bugs/issues can be found/reported here
 * https://github.com/bmcculley/statusboard
 *
 */
require('config.php');
require('inc/functions.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php 
            if (in_array($siteTitle, $softTitle)) {
                echo $siteTitle; 
            } else {
                echo advancedTitle($siteTitle);
            } ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

        <div class="wrapper">
            <header class="top-bar">
                <h1 class="site-title"><?php echo $siteTitle; ?></h1>
            </header><!-- header -->
            <div class="content">
                <?php
                foreach ($sitesToCheck as $site) {
                    if (isItUP($site)) {
                        echo "<div class=\"status up\"></div> <div class=\"status-domain\">".getDomain($site)." is up!</div>";
                    } else {
                        echo "<div class=\"status down\"></div> <div class=\"status-domain\">".getDomain($site)." is down.</div>";
                    }
                    echo "<div class=\"clearfix sb\"></div>";
                }
                ?>
            </div><!-- content -->
            <footer class="colophon">
                <div class="creater-link">PHP Status Board by <a href="http://bmcculley.ejank.com">B McCulley</a></div>
            </footer><!-- footer -->
        </div>
        
    </body>
</html>