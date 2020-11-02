<?php


namespace Paw\App\Controllers;

use Paw\Core\Controller;

use Paw\App\Models\socioCollection;

class SocioController extends Controller{

    public ?string $modelname = socioCollection::class;




    public function index(){

        $titulo = 'Socios';

        $socios = $this->model->getAll();

        require $this->viewDir.'socios.index.view.php';

    }

    public function get(){

    }

    public function set(){

    }
    public function edit(){

    }


}