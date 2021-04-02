<?php

function usedPageView($src, $title = false, $values = false, $error = false)
{
    $childView = "app/view/views/_".$src.".php";
    $childScript = "app/view/scripts/sc_".$src.".php";
    $childStyle = "app/view/styles/st_".$src.".php";
    if($src=="login")
    {
        include 'app/view/views/large-layout.php';
    }
    else{
        include 'app/view/views/layout.php';
    }

}
function toolsView($src, $title = false, $values = false)
{
    $childView = "app/view/views/tools/_".$src.".php";
    $childScript = "app/view/scripts/tools/sc_".$src.".php";
    $childStyle = "app/view/styles/tools/st_".$src.".php";
    include 'app/view/views/layout.php';
}
/*function usedPageViewDynamic($src, $title = false, $dynamicPage)
{
    $childView = "app/view/views/_".$src.".php";
    $childScript = "app/view/scripts/sc_".$src.".php";
    $childStyle = "app/view/styles/st_".$src.".php";
    if($src=="login")
    {
        include 'app/view/views/large-layout.php';
    }
    else{
        include 'app/view/views/layout.php';
    }

}*/