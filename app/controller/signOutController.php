<?php
function signOutController()
{

    if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_POST['token'])) {
        if ($_POST['token'] == $_SESSION['token']) {
            $_SESSION['roles'] = null;
            $_SESSION['id'] = null;
            $_SESSION['email'] = null;
            $_SESSION['userType'] = null;
            $_SESSION['timeSess'] = null;
        }
    }

}
