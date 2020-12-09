<?php


namespace Paw\App\Controllers;

use Paw\Core\Controller;

use Paw\App\Models\socioCollection;

class TwigSocioController extends TwigController {

    public ?string $modelname = socioCollection::class;

    public function index(){

        $titulo = 'Socios';

        $socios = $this->model->getAll();
        $menu = $this->menu;
        $this->twigLoader('socios.index.view.twig', compact("menu", "titulo", "socios"));
    }

    public function get(){

        $socioId = $request->get('id');

        $socio = $this->model->get($socioId);
        $titulo = 'Socio';
        $this->twigLoader('socios.show.view.twig', compact("menu", "titulo", "socio", "socioId"));

    }

    public function set(){

    }
    public function edit(){

    }


}