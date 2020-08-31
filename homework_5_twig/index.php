<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once __DIR__."/vendor/autoload.php";

function renderTwig($template, $data = [])
{
//        $templateDirectory = realpath(__DIR__.'/templates');
//        $loader = new Twig_Loader_Filesystem($templateDirectory);
//        $twig = new Twig_Environment($loader);
//
//
//    return $twig->render($template, $data);
    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates');
    $twig = new \Twig\Environment($loader, []);

    return $twig->render($template, $data);
}

// echo renderTwig('test.twig', ['var' => '123']);
var_dump(renderTwig('test.twig', ['var' => '123']));