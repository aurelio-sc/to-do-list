<?php
include (path('models') . 'UserModel.php');

class SignUpController {
    public function processSignUp() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {            
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm-password'];

            if (isset($username) || isset($password) || isset($email) || isset($confirm_password)) {
                if (strlen($username) == 0) {
                    $response = ['status' => 'failure', 'message' => '"Username" cannot be empty.'];
                } else if (strlen($email) == 0) {
                    $response = ['status' => 'failure', 'message' => '"Email" cannot be empty.'];
                } else if (strlen($password) == 0) {
                    $response = ['status' => 'failure', 'message' => '"Password" cannot be empty.'];
                } else if (strlen($confirm_password) == 0) {
                    $response = ['status' => 'failure', 'message' => 'Please confirm your password.'];
                } else if ($confirm_password != $password) {
                    $response = ['status' => 'failure', 'message' => 'The passwords do not match.'];
                } else {
                    //$response = ['status' => 'success', 'message' => 'Successfully logged in!'];
                    $user = new User($username,$email,$password);
                }
                echo json_encode($response);
                exit();
            }
        }
    }

    public function index() {
        include path('views') . '/signup.php';
    }
}