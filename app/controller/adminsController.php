<?php
function adminsController()
{
    $title = "Admins";
    Auth('admins', $title, '1');


}

function adminsListController()
{

    //Php'de Api Kullanımı Ekleme Silme Güncelleme için Değişik parametreler(fields) gönderebiliriz.sendReq() fonksiyonu bu işlemi yapar.
   /* $getUserListArr = array();
    $getUserListArr['type'] = '';
    $getUserListArr['pepper'] = "";
    $hashcontrol = hash('sha256', '');
    $getUserListArr['hash'] = $hashcontrol;
    $response = sendReq("", $getUserListArr);*/
    $response='[{"id":"123","email":"ekremtinas@gmail.com","password":"05423725116Et!","userType":1,"roles":1},{"id":"124","email":"ekremtinas2@gmail.com","password":"05423725116Et!","userType":1,"roles":2},{"id":"125","email":"ekremtinas3@gmail.com","password":"05423725116Et!","userType":3,"roles":3},{"id":"126","email":"ekremtinas4@gmail.com","password":"05423725116Et!","userType":4,"roles":4},{"id":null,"email":"ekremtinasasd@gmail.com","password":"05423725116","userType":"2","roles":null}]';


    print_r(json_encode($response));
}

function adminsAddPostController()
{
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_POST['_token'])) {

        if ($_POST['_token'] == $_SESSION['_tokenAllToken']) {

            if (isset($_POST['userEmail'])) $userEmail = $_POST['userEmail'];
            else $userEmail = null;
            if (isset($_POST['userPass'])) $userPass = $_POST['userPass'];
            else $userPass = null;
            if (isset($_POST['userType'])) $userType = $_POST['userType'];
            else $userType = null;



            //Admin Ekleme İşlemleri
            $getUserInsertArr = array();

            $getUserInsertArr['userEmail'] = $userEmail;
            $getUserInsertArr['userPass'] = $userPass;
            $getUserInsertArr['userType'] = $userType;
            $getUserInsertArr['userRights'] = "";



            $response = [
                "status"=>"true",
                "message"=>"Inserted"
            ];
            print_r(json_encode($response));
            exit();

        }
    }

}

function adminsDeletePostController()
{

    if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_POST['_token'])) {

        if ($_POST['_token'] == $_SESSION['_tokenAllToken']) {

            if (isset($_POST['userEmail'])) $userEmail = $_POST['userEmail'];
            else $userEmail = null;
            if (isset($_POST['userId'])) $userId = $_POST['userId'];
            else $userId = null;

            $response = [
                "status"=>"true",
                "message"=>"Deleted"
            ];
            print_r(json_encode($response));
        }
    }

}

function adminsEditPostController()
{
    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_POST['_token'])) {

        if ($_POST['_token'] == $_SESSION['_tokenAllToken']) {

            if (isset($_POST['userId'])) $userId = $_POST['userId'];
            else $userId = null;
            if (isset($_POST['userEmail'])) $userEmail = $_POST['userEmail'];
            else $userEmail = null;
            if (isset($_POST['userPass'])) $userPass = $_POST['userPass'];
            else $userPass = null;
            if (isset($_POST['userType'])) $userType = $_POST['userType'];
            else $userType = null;

            if (isset($_POST['isActive'])) $isActive = $_POST['isActive'];
            else $isActive = "off";


            $getUserUpdateArr = array();

            $getUserUpdateArr['userId'] = $userId;
            $getUserUpdateArr['userEmail'] = $userEmail;
            $getUserUpdateArr['userPass'] = $userPass;
            $getUserUpdateArr['userType'] = $userType;
            $getUserUpdateArr['userRights'] = "";
            $getUserUpdateArr['isActive'] = $isActive;

            $response = [
                "status"=>"true",
                "message"=>"Edited"
            ];

            print_r(json_encode(array_merge($getUserUpdateArr, $response)));
            exit();


        }
    }
}

?>