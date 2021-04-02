<?php
//include "model/model.php";
function homeController()
{

    $title = "Home"; //Sayfanın sekmmesindeki başlıkların ayırt edilmesini sağlayan değişken.
    $message = "This is a home message.";
    usedPageView('index', $title, array('message' => $message, 'subject' => 'a home subject')); //home.php adındaki sayfanın görüntüsünü göstermek için kullanılan fonksiyon,title:Sayfa başlığı

}


//Controllers

include "adminsController.php";
include "loginController.php";
include "signOutController.php";
include 'toolsController.php';
//Middlewares
include 'app/middleware/middlewares.php';
/*Apiden Bağlantısı*/
function sendReq($url, $fields)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $fields
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return json_decode($response, true);
}