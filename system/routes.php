<?php
//Controllers
include (path('controllers') . 'SignInController.php');
include (path('controllers') . 'SignUpController.php');

function route($url) {
    switch ($url) {
        case '/':
            $signInController = new SignInController();
            $signInController->index();
            break;
        case '/user/signin':
            $signInController = new SignInController();
            $signInController->processSignIn();
            break;
        case '/user/signup':            
            $signUpController = new SignUpController();
            $signUpController->index();                     
            break;
        case '/user/signup/process':            
            $signUpController = new SignUpController();
            $signUpController->processSignUp();                     
            break; 
        default:
        echo 'erro 404';
        break;
    }
}

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$url = str_replace(URL_BASE,'',$url);
route($url);

//$_SERVER['REQUEST_METHOD']