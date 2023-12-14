<?php

namespace ToDoList\System\Controllers;

use CoffeeCode\Router\Router;
use ToDoList\System\Models\User;
use YuriOliveira\Validate\Validate;
use YuriOliveira\Validate\Message\Message;

class SignUpController {
    
    public function __construct(protected Router $router)
    {}

    public function processSignUp(array $data) {

        Message::extend(['confirm_password' => "The passwords don't match."]);

        Validate::extend('confirm_password', function($key, $value) use ($data)
        {
            if ($value != $data['password']) {
                return Message::get('confirm_password', $key);
            }
        
            return true;
        });

        $validate = Validate::create($data);

        $validate->validate([
            'username' => ['min:3','max:250', 'required'],
            'email' => ['email', 'required'],
            'password' => ['min:8', 'max:100', 'required'],
            'confirm_password' => ['min:8', 'max:100', 'confirm_password', 'required'],
        ]);

        $response = [
            'status' => 'success', 
            'message' => 'User successfully created! Click "Ok" to go back to the sign-in page.',
            'redirect' => $this->router->route('signin.index')
        ];

        if ($errors = $validate->errors()) {
            $response = [
                'status' => 'failure',
                'message' => current($errors)
            ];
            echo json_encode($response);
            return;
        }

        $user = new User();
        $user->setUsername($data['username']);
        $user->setEmail($data['email']);
        $user->setPassword($data['password']);
        if (!$user->addUser()) {
            $response = [
                'status' => 'failure',
                'message' => 'User creation failed.'
            ];                      
        }
        echo json_encode($response);
    }

    public function index() {
        include path('views') . '/signup.php';
    }

}