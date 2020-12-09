<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;

class TwigController extends Controller {

    public function twigLoader($file, $array) {
        $loader = new \Twig\Loader\FilesystemLoader( __DIR__ . '/../views');
        $twig = new \Twig\Environment($loader, array('auto_reload' => true));
        echo $twig->render($file, $array);
    }

}