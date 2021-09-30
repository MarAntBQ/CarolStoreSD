<?php
session_start();
require_once 'controllers/controllers.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    //<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1">
    Templatectr::getPageNames();
    echo '<title>Carol Store&reg;</title>';
    include 'includes/head.php';
	include 'app/head.php';
    ?>
</head>
<body>
   <?php
    Templatectr::getPageNames();
    include $GLOBALS["Page-Location"];
    ?>
</body>
</html>