<?php

require_once 'sistema escola]';

$contateste = new Escola ('gabriel', '30', 'cursando');
echo $contateste -> veraluno() . PHP_EOL;
echo $contateste -> versitua() . PHP_EOL;
echo $contateste -> verfaltas () . PHP_EOL;