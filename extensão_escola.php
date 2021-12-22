<?php

require_once 'sistema_escola.php';

$contateste = new Escola ('gabriel', '2', 'formado');
echo $contateste -> veraluno() . PHP_EOL;
echo $contateste -> versitua() . PHP_EOL;
echo $contateste -> verfaltas () . PHP_EOL;