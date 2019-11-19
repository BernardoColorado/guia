<?php
/************************/
/*****PSR-7-INTERFACE****/
/************************/
//
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
//
/************************/
/*****SLIM-INSTANCE******/
/************************/
//
$app = new \Slim\App(['settings' => ['displayErrorDetails' => true,'responseChunkSize' => 8096]]);
//
/*********************/
/******CONTAINER******/
/*********************/
//
require_once '../app/core/container/config.php';
require_once '../app/core/container/views.php';
require_once '../app/core/container/database.php';
require_once '../app/core/container/modules.php';
require_once '../app/core/container/auth.php';
//
/******************/
/****ROUTER********/
/******************/
//
require_once '../app/core/router/page/home.php';
require_once '../app/core/router/page/user.php';
require_once '../app/core/router/page/guide.php';
//
/******************/
/****EJECUTAMOS****/
/******************/
$app->run();
?>