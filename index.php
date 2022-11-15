<?php
include 'models/public/routers/Router.Class.php';
// use monNamespaceRouter;
use monNamespaceRouter\Router;

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" :  "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));


include 'vendor/autoload.php';

$url = '';
$router = new Router($url);
$router->url = $_GET;

try {
    if (!empty($router->url)) {
        $url = implode("", $router->url);
        switch ($url) {
            case "login":
                $titreLogin = $router->getTitreLogin();
                include 'views/view_login/page.login.myself.view.php';
                break;
            case "admin":
                $titreAdmin = $router->getTitreAdmin();
                include 'views/view_admin/dashboard.admin.template.view.php';

                // if (isset($url)) {
                //     // On cherche si la chaine de caractere contient l'expression admin
                //     if (preg_match("#^admin#", $url)) {
                //         require "views/management_client/accueil.client.view.php";
                //     } else {
                //         throw new Exception("Erreur 404, la page n'existe pas svp!");
                //         include 'views/page.error.template.view.php';
                //     }
                // }


                break;
            case "user":
                $titreUser = $router->getTitreUser();
                include 'views/view_collaborateur/dashboard.user.template.view.php';
                break;
            default:
                throw new Exception("Erreur 404, la page n'existe pas svp!");
                include 'views/view_exception/page.error.template.view.php';
        }
    } else {
        $titreLogin = $router->getTitreLogin();
        include 'views/view_login/page.login1.view.php';
    }
} catch (Exception $e) {

    include 'views/page.error.template.view.php';
    // $msg = $e->getMessage();
}
