<?php
function route($url)
{
    switch ($url) //url içeriğine göre case yapısı içindeki kodların çalışması sağlanıyor.
    {
        //usedPage
        case "login":
            loginController();
            break;
        case "login-post":
            loginPostController();
            break;
        case "sign-out":
            signOutController();
            break;
        case "home":
            homeController();
            break;


        default:
            routeTools ($url);
            break;
    }
}


//Tools
function routeTools($url){
    switch($url)
    {
        case "404":
            status404Controller();
            break;
        case "500":
            status500Controller();
            break;
        case "advanced":
            advancedController();
            break;
        case "blank":
            blankController();
            break;
        case "buttons":
            buttonsController();
            break;
        case "calendar":
            calendarController();
            break;
        case "chartjs":
            chartjsController();
            break;
        case "contacts":
            contactsController();
            break;
        case "e-commerce":
            eCommerceController();
            break;
        case "editors":
            editorsController();
            break;
        case "flot":
            flotController();
            break;
        case "forgot-password":
            forgotPasswordController();
            break;
        case "form-general":
            formGeneralController();
            break;
        case "gallery":
            galleryController();
            break;
        case "general":
            generalController();
            break;
        case "icons":
            iconsController();
            break;
        case "inline":
            inlineController();
            break;
        case "invoice-print":
            invoicePrintController();
            break;
        case "invoice":
            invoiceController();
            break;
        case "language-menu":
            languageMenuController();
            break;
        case "layout-boxed":
            layoutBoxedController();
            break;
        case "layout-collapsed-sidebar":
            layoutCollapsedSidebarController();
            break;
        case "layout-fixed-footer":
            layoutFixedFooterController();
            break;
        case "layout-fixed-sidebar":
            layoutFixedSidebarController();
            break;
        case "layout-fixed-topnav":
            layoutFixedTopnavController();
            break;
        case "layout-top-nav-sidebar":
            layoutTopNavSidebarController();
            break;
        case "layout-top-nav":
            layoutTopNavController();
            break;
        case "legacy-user-menu":
            legacyUserMenuController();
            break;
        case "lockscreen":
            lockscreenController();
            break;
        case "mail-compose":
            mailComposeController();
            break;
        case "mailbox":
            mailboxController();
            break;
        case "modals":
            modalsController();
            break;
        case "navbar":
            navbarController();
            break;
        case "pace":
            paceController();
            break;
        case "profile":
            profileController();
            break;
        case "project-add":
            projectAddController();
            break;
        case "project-detail":
            projectDetailController();
            break;
        case "project-edit":
            projectEditController();
            break;
        case "projects":
            projectsController();
            break;
        case "read-mail":
            readMailController();
            break;
        case "recover-password":
            recoverPasswordController();
            break;
        case "register":
            registerController();
            break;
        case "ribbons":
            ribbonsController();
            break;
        case "sliders":
            slidersController();
            break;
        case "table-data":
            tableDataController();
            break;
        case "table-jsgrid":
            tableJsgridController();
            break;
        case "table-simple":
            tableSimpleController();
            break;
        case "timeline":
            timelineController();
            break;
        case "validation":
            validationController();
            break;
        case "widgets":
            widgetController();
            break;
        default:
            routeAdmins($url);
            break;
    }
}
function routeAdmins($url)
{
    switch($url)
    {
        //Admins
        case "admins":
            adminsController();
            break;
        case "admins-list":
            adminsListController();
            break;
        case "admin-add-post":
            adminsAddPostController();
            break;
        case "admin-edit-post":
            adminsEditPostController();
            break;
        case "admin-delete-post":
            adminsDeletePostController();
            break;

        default:
            homeController();
            break;
    }
}