<?php


namespace Paw\App\Controllers;

use Paw\Core\Controller;

use Paw\App\Models\socioCollection;

class SocioController extends Controller{

    public ?string $modelname = socioCollection::class;




    public function index(){

        $titulo = 'Socios';

        $socios = $this->model->getAll();
        var_dump($socios);
        require $this->viewDir.'socios.index.view.php';

    }

    public function get(){

        global $request;
        $socioId = $request->get('id');

        $socio = $this->model->get($socioId);
        $titulo = 'Socio';

        require $this->viewDir.'socios.show.view.php';

    }

    public function set(){

    }
    public function edit(){

    }


}