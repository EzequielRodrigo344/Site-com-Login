<?php

$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO('mysql:host=localhost;dbname=pw2', 'root', 'quiel230202');

$stmt = $pdo->prepare("SELECT nome, email, senha FROM users WHERE email = :email ");
$stmt->bindParam(':email', $email);

$stmt->execute();

$data = $stmt->fetch(PDO::FETCH_ASSOC);


if($email == $data['email'] && $password == $data['senha']) {
    session_start();
    $_SESSION['name'] = $data['nome'];

    $ip_address = $_SERVER['REMOTE_ADDR'];
    setcookie('user_ip', $ip_address, time() + 3600);
  
    header("location: content.php");
} else {
    echo 'Email ou senha inválidos.';
}
echo "<br><br><br>FIM";