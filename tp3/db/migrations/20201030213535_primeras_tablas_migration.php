<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class PrimerasTablasMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $tableAutor = $this->table('autor'); 
        $tableAutor-> addColumn('nombre', 'string', ['limit' => 60]) 
            ->addColumn('email', 'string', ['null'=> true])
            ->create();


        $tableTasks = $this->tableTasks('tasks');
        $tableTasks ->addColumn('titulo','string', ['limit' => 60])
            ->addColumn('descripcion','string', ['null' => true])
            ->addColumn('autor', 'integer')
            ->addColumn('created','timeStamp', ['default' => 'CURRENT_TIMESTAMP'])
            ->addForeignKey('autor', 'autor','id')
            ->create();

    }
}
