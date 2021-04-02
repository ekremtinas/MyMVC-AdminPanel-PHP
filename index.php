<?php
include "app/route/route.php";
include "app/view/view.php";
include "app/controller/controller.php";

function conlog($data)
{
    echo '<script>';
    echo 'console.log(' . json_encode($data) . ')';
    echo '</script>';
}

if (!empty($_GET['url'])) //url verisinin içeriğinin dolu olduğunda çalışan if
{
    $url = $_GET['url']; //url verisi $url değişkenine atılıyor.

    route($url);

} else {
    homeController();
}
