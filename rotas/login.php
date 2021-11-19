<?php

// buscar o template com o twig e renderizar
// $twig esta sendo injetado e o metodo render espera o arquivo e array de valores.
$template = $twig->render('login.html', [
    'horario' => date('d/m/Y H:i:s')
]);
echo $template;