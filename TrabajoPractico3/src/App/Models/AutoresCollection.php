<?php

namespace Paw\App\Models;

use Paw\Core\Models;
use Paw\App\Models\Autor;
use Paw\Core\Model;

class AutoresCollection extends Model
{
    public $table = 'autor';

    public function getAll()
    {
        // crear tantos Autor como filas de la tabla autores
        $authors = $this->queryBuilder->select($this->table);
        $authorsCollection = [];
        foreach($authors as $author){
            $newAuthor = new Autor;
            $newAuthor->set($author);
            $authorsCollection[] = $newAuthor;
        }
        return $authorsCollection;
    }
}