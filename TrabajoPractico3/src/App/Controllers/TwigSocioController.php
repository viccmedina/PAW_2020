<?php


namespace Paw\App\Controllers;

use Paw\Core\Controller;

use Paw\App\Models\socioCollection;

class TwigSocioController extends SocioController{

    public ?string $modelname = socioCollection::class;
    
    private function twigLoader($file, $array) {
        $loader = new \Twig\Loader\FilesystemLoader( __DIR__ . '/../views');
        $twig = new \Twig\Environment($loader, array('auto_reload' => true));
        echo $twig->render($file, $array);
    }


    public function index(){

        $titulo = 'Socios';

        $socios = $this->model->getAll();
        $menu = $this->menu;
        $this->twigLoader('socios.index.view.twig', compact("menu", "titulo", "socios"));
    }

    public function get(){

        global $request;
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