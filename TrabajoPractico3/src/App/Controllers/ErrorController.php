<?php

namespace Paw\App\Controllers;

use Paw\Core\Controller;

class ErrorController extends Controller{

    public function notFound(){
        http_response_code(404);
        require $this->viewsDir . "not-found.view.php";
    }

    public function internalError(){
        http_response_code(500);
        require $this->viewsDir . 'internal-error.view.php';
    }

}