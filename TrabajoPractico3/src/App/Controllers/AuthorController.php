<?php

namespace Paw\App\Controllers;

use Paw\App\Models\AutoresCollection;
use Paw\Core\Controller;

class AuthorController extends Controller
{
    public ?string $modelName = AutoresCollection::class;

    public function index()
    {
        $title = "Autores";
        $authors = $this->model->getAll();
        require $this->viewsDir . 'authors.index.view.php';
    }

    public function get()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function set()
    {
        //
    }
}