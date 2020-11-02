<?php

namespace Paw\App\Models;

use Paw\Core\Model;
use Paw\App\Models\Autor;

class AutoresCollection extends Model{

    public $table = 'autor';

    public function getAll(){
        $authors = $this->queryBuilder->select($this->table);
        $authorsCollection = [];

        foreach($authors as $author){
            $newAuthor = new Autor;
            $newAuthor->set($author);
            $authorsCollection[] = $newAuthor;
        }
        return $authorsCollection;
    }


    public function get($id){
        $author  = new Autor;
        $author->setQueryBuilder($this->queryBuilder);
        $author->load($id);
        return $author;
    }

}