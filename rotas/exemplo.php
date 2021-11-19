<?php

$alunos = ['João', 'Pedro', 'Maria', 'José'];

echo $twig->render('exemplo.html', [
    'alunos' => $alunos
]);