<?php
$app->get('/guide/materia', \App\Controllers\MateriaController::class.':index');
$app->get('/guide/tema/{id}', \App\Controllers\TemaController::class.':subindex');
$app->get('/guide/capitulo/{id}', \App\Controllers\CapituloController::class.':subindex');