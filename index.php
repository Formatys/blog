<?php
define('WEB_URL','http://localhost/router/');



include './templates/pages/' .  htmlspecialchars (htmlentities($_GET['a'])).'.php' ?? '404.php';

//
//if(isset($_GET['a'])){
//    include './templates/pages/' .  htmlspecialchars (htmlentities($_GET['a'])).'.php';
//}else{
//    include './templates/pages/404.php';
//}





