<?php

require 'Core/Database.php';

$db = new Database();

$error = [];

if($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $user_email = $_POST['userEmail'];
    $user_password = $_POST['userPassword'];

    $user = $db->query("SELECT * FROM users WHERE user_email = '{$user_email}' AND user_password = '{$user_password}';")->find();

    if( $user ){
        
        // If user exists session will start

        $_SESSION["loggedin"] = [

            "id" => $user['id'],
            "name" => $user['user_name'],
            "email" => $user['user_email'],
            'password' => $user['user_password']

        ];

        header('location: /');
        exit();

        
    }else{
        $error['emailOrPassword'] = 'Incorrect email or password';
    }
}


require 'views/login.view.php';