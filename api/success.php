<?php 
session_start();
require '../php/host/host.php';
$user = json_decode(base64_decode($_SESSION['user']), true);
session_destroy();
if($user){
    $name = $user['name'];
    $email = $user['email'];
    $amount = $user['amount'];
    $nickname = $user['nickname'];
    $message = $user['message'];

    var_dump($user);
    $query = "INSERT INTO donates (name, email, amount, nickname, message) VALUES ('$name', '$email', '$amount', '$nickname', '$message')";
    $result = mysqli_query($conexao, $query);
    if($result){
        header("Location: " . '../success.html?nm='.base64_encode($name));
    }else{
        header("Location: " . '../cancel.html');
    }
}