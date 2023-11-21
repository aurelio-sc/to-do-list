<?php
//Controllers
include ('controllers/SignInController.php');

function route($url) {
    switch ($url) {
        case '/user/signin':
            $loginController = new SignInController();
            $loginController->processSignIn();
            echo 'foi';
            break;
        case '/':
            $loginController = new SignInController();
            $loginController->index();
            break;
        default:
        echo 'foi-se';
        break;
    }
}

$url_base = '/to-do-list';
$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$url = str_replace($url_base,'',$url);
route($url);