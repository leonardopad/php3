<?php 

// buscar no banco se um usuario existe e se a senha está correta
$email = $_POST['email'];
$senha = hash('sha256', $_POST['pass']);

$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha';";
// preparar o comando SQL para rodar no banco
$statement = $conn->prepare($sql); // cria um statament
$statement->execute(); // statament roda o comando preparando no banco

$result = $statement->setFetchMode(PDO::FETCH_ASSOC);

$resultadoConsulta = $statement->fetchAll();

// echo '<pre>';
// var_dump($resultadoConsulta);
// echo 'Tamanho Array: ' . count($resultadoConsulta);
// echo '</pre>';


if (count($resultadoConsulta) == 1) {
    $template = $twig->render('perfil.html', [
        'usuario' => $resultadoConsulta[0]['nome']
    ]);
} else {
    $template = $twig->render('login.html', [
        'usuario' => $_POST['email'],
        'ehErro'  => true
    ]);
}

echo $template;