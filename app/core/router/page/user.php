<?php
$app->get('/user/signin', \App\Controllers\UsuarioController::class.':signin');
$app->get('/user/signup', \App\Controllers\UsuarioController::class.':signup');
$app->get('/user/payment', \App\Controllers\UsuarioController::class.':payment');