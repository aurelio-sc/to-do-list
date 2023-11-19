<?php
//Controllers
include ('controllers/SignInController.php');

// function route($url) {
//     switch ($url) {
//         case 'user/signin':
//             $loginController = new SignInController();
//             $loginController->processSignIn();
//             echo 'foi';
//             break;
//         default:
//         echo 'foi-se';
//         break;
//     }
// }

// $url = parse_url($_SERVER['REQUEST_URI'])[' path'];
// echo $url;
// $url = ltrim($url, '/');
// route($url);

if ($_SERVER['REQUEST_URI'] != '/to-do-list/'){
$url = parse_url($_SERVER['REQUEST_URI'])[' path'];
echo $url;
$url = ltrim($url, '/');
}
?>