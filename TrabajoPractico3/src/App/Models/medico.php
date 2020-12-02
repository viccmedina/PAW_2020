<?php

namespace Paw\App\Models;

use Paw\Core\Model;
use Exception;
use Paw\Core\Database\QueryBuilder;

use Paw\Core\Exceptions\invalidValueFormatException;


class Medico extends Model {

    public $table = 'medico';
    private $queryBuilder;

    public function setQueryBuilder(QueryBuilder  $qb){
        $this->queryBuilder = $qb;

    }
    public $fields = [
        'id'    => null,
        'nombre'  => null,
        'email'  => null,
        'matricula'  => null,
        'especialidad'  => null  
    ];

    public function getAll() 
        {$medicos = $this->queryBuilder->select($this->table);
        $medicosCollection = [];

        foreach ($medicos as $medico){
            $newmedico = new medico();

            $newmedico->fields = $medico;
            $medicosCollection[] = $newmedico;

        }

        return $medicosCollection;

    }

    public function getDias() {
        return $this->queryBuilder->selectDiaPorMedico($this->fields['matricula']);
    }

    public function getTurnosTomados() {
        return $this->queryBuilder->selectTurnos($this->fields['id']);
    }

}

?>