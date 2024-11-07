<?php

session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=pw2', 'root', 'root');

$stmt = $pdo->prepare("INSERT INTO users(nome, email, senha) VALUE(?,?,?)");
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $email);
$stmt->bindParam(3, $password);

if($stmt->execute())
    {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['name'] = $name;
        header("location: login.html");
    }
    else{
        echo "Eita, acho que deu ruim algo ai";
    }


//querystring
