<?php
//GET
function loginController()
{

    $title = "Login";
    usedPageView('login', $title);
    //conlog($title);
}

//POST
function loginPostController()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_POST['_token'])) {
        if ($_POST['_token'] == $_SESSION['_tokenAllToken']) {

                    //Login İşlemleri

            //Süreli Oturum için
            if (!isset($_SESSION['timeSess'])) {
                $time = time();
                $_SESSION['timeSess'] = $time + 1800;
            }

                    echo 'success';


        }
    }
}
