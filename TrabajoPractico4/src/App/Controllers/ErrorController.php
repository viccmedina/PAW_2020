<?php
namespace Paw\App\Controllers;

use Paw\Core\Controller;

class ErrorController extends Controller {

    public function notfound(){
        http_response_code(404);
        require $this->viewDir.'not-found.view.php';
    }

    public function internalError(){
        http_response_code(500);
        require $this->viewDir.'internal-error.view.php';

    }
}