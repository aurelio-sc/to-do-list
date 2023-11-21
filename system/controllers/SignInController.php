<?php
class SignInController {
    public function processSignIn() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {            
            $username = $_POST['username'];
            $password = $_POST['password'];
            if (isset($username) || isset($password)) {
                if (strlen($_POST['username']) == 0) {
                    $response = array('status' => 'failure', 'message' => '"Username" cannot be empty.');
                } else if (strlen($_POST['password']) == 0) {
                    $response = array('status' => 'failure', 'message' => '"Password" cannot be empty.');
                }
                $response = array('status' => 'success', 'message' => 'Successfully logged in!');
                echo json_encode($response);
                exit();
            }
        }
    }

    public function index() {
        include path('views') . '/signin.php';
    }
}