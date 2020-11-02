<?php

namespace Paw\App\Controllers;
 
use Paw\Core\Controller;
use Paw\App\Models\AutoresCollection;


class AuthorsController extends Controller{

    public ?string $modelName = AutoresCollection::class;


    public function index(){
        $titulo = "Autores";
        $nav = "Authors";
        $authors = $this->model->getAll();
        require $this->viewsDir . 'Authors-index-view.php';
    }

    public function get(){
        global $request;
        $authorID = $request->get('id');
        $author = $this->model->get($authorID);
        $titulo = "Autor";
        $nav = "Authors";
        require $this->viewsDir . 'Author-show-view.php';
    }

    public function edit(){
        
    }

    public function set(){
        
    }
}
