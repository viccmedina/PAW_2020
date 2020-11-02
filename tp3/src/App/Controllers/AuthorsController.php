<?php

namespace Paw\App\Controllers;
 
use Paw\Core\Controller;
use Paw\App\Models\AutoresCollection;


class AuthorsController extends Controller{

    public ?string $modelName = AutoresCollection::class;


    public function index(){
        $authors = $this->model->getAll();
        require $this->viewsDir . 'authors-index-viex.php';
    }

    public function get(){
        
    }

    public function edit(){
        
    }

    public function set(){
        
    }
}
