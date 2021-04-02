<?php
function Auth($src, $title, $authorized = false, $authorizedSecond = false, $pageTypes = false)//Burda Authorized işlemi yapıldı görüntülenecek olan sayfaların viewleri filtreden geçiyor.Middlewaredir.
{
    if (!isset($_SESSION)) {//Session başlatılır
        session_start();
    }

        if(true) {

            if ($pageTypes == false) {
                usedPageView($src, $title); // View'in gönderilmesi
            } else {
                AuthRoller($src, $title, $pageTypes); // Rol'e göre view'in gönderilmesi üzerine AuthRoller adında ki diğer middleware'e gönderilir.
            }
        }
        else { // Bu else bir giriş hakkı kullanmamız durumunda kullanılır.

            $title = "Authscreen";
            usedPageView('authscreen');
        }

}

function AuthRoller($src, $title, $pageTypes)//Burda rol'e göre sayfanın gösterilmesi üzerine parametreler alınır.ve o rol'e göre view gönderilir. NOT: pageTypes:sayfa tipidir.Catalog,Suppliers vs.
{
    if (!isset($_SESSION)) {//Session başlatılır
        session_start();
    }
   // if (isset($_SESSION['userRights'])) {//Rol olup olmadığı sorulması.
        if(true)
        {

            usedPageView($src, $title); // View'in gönderilmesi
        } else {

            $title = "Authscreen";
            usedPageView('authscreen');//Erişim yetersiz olduğunu gösteren sayfa
        }


}

// Token oluşturmak için gerekli fonksiyon
function csrf()
{
    if (!isset($_SESSION)) {

        session_start();
    }

        echo '<input hidden name="_token" value="' . $_SESSION["_tokenAllToken"] . '">';



}


?>