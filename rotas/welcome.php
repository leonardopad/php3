<?php



// SAIDA DO CLIENTE
echo $twig->render('welcome.html', [
    'titulo' => 'Exemplo com blocos',
    'informacao' => 'Consulte no manual do Twig'
]);