#!/usr/bin/env php

<?php

require_once __DIR__ . '/../vendor/autoload.php';

use KirillZharkov\TicTacToe\Controller\Controller;

$controller = new Controller();
$controller->startGame();
