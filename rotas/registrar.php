<?php

// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = hash('sha256', $_POST['senha']);

$sql = "INSERT INTO usuarios (nome, email, senha) 
        VALUES (:nome, :email, :senha);";

$statement = $conn->prepare($sql);
$statement->bindParam(':nome', $nome);
$statement->bindParam(':email', $email);
$statement->bindParam(':senha', $senha);

$statement->execute();