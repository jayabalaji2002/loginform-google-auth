<?php
include('config.php');
include('firebaseRDB.php');
include('dbcon.php');

session_start();


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if($name==""){
    echo "Name is Required";
}elseif($email==""){
    echo "Email is Required";
}elseif($password==""){
    echo "Password is required";
}else{
    $rdb = new firebaseRDB($databaseURL);
    $retrieve = $rdb->retrieve("/user","email","EQUAL",$email);
    $data = json_decode($retrieve,1);

    if(isset($data['email'])){
        echo "Email is Already in use";
    }else{
        $insert = $rdb ->insert("/user",[
            "name" =>$name,
            "email" =>$email,
            "password" =>$password
        ]);
        
        $result = json_decode($insert,1);
        if(isset($result['name'])){
            echo "SignUp Success, Ready to Login!!!";
        }else{
            echo "Sign up failed";
        }
    }
}

// Authentication

if(isset($_POST['register_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userProperties = [
        'email' => $email,
        'emailVerified' => false,
        'password' => $password,
        'displayName' => $name,
    ];
    
    $createdUser = $auth->createUser($userProperties);

    if($createdUser){
        $_SESSION['status'] = "User Created/Registered Successfully";
        header('location:signup.php');
        exit();
    }else{
        $_SESSION['status'] = "User Not/Registered";
        header('location:signup.php');
        exit();
    }
}


?>