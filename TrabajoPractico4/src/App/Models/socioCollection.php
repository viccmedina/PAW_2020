<?php
namespace Paw\App\Models;


use Paw\App\Controllers\SocioController;
use Paw\Core\Model;

use Paw\App\Models\socio;


class socioCollection extends  Model{

    public $table = 'socio';


    public function getAll(){
        //tantos socios como filas de tabla de socios

        $socios = $this->queryBuilder->select($this->table);
        $sociosCollection = [];


        foreach ($socios as $socio){
            $newSocio = new socio();

            $newSocio->set($socio);
            $sociosCollection[] = $newSocio;

        }

        return $sociosCollection;

    }

    public function get($id){
        $socio = new socio;

        $socio ->setQueryBuilder($this->queryBuilder);
        $socio->load($id);
        return $socio;

    }

}
