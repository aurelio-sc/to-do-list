<?php

class User {    
    private $username;
    private $email;
    private $passwordSalt;
    private $passwordHash;

    //Construct:
    public function __construct($username, $email, $password) {        
        $this->username = $username;
        $this->email = $email;
        $this->setPassword($password);
    }

    //Password hashing:
    private function generateSalt() {        
        return bin2hex(random_bytes(16));
    }
    private function hashPassword($password, $salt) {        
        return password_hash($password . $salt, PASSWORD_DEFAULT);
    }
    private function setPassword($password) {        
        $this->passwordSalt = $this->generateSalt();
        $this->passwordHash = $this->hashPassword($password, $this->passwordSalt);
    }    

    private function isPasswordValid($password, $confirm_password) : bool {
        return $password === $confirm_password;
    }
    
    private function isEmailValid($email) : bool {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    private function addUser($id, $username, $email, $password) {
        global $mysqli;
        $query = "INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `password_salt`) VALUES (?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        if ($stmt) {
            $stmt->bind_param('issss', $this->id, $this->username, $this->email, $this->passwordHash, $this->passwordSalt);
            $stmt->execute();
            $stmt->close();
        }
    }
}
