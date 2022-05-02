<?php

// Cria as variaveis com os dados do banco
//  e depois faz a coneção com o banco
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'donate_world_bros_server');

define('DB_CHARSET', 'utf8');
$conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);