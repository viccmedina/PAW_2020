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


        $tableSocio = $this->table("socio");
        $tableSocio->addColumn('nombre', 'string', ['limit'=>60])

                    ->addColumn('email', 'string', ['null'=>true])
                    ->create();

        $tableMedico = $this->table("medico");
        $tableMedico->addColumn('nombre', 'string', ['limit'=>60])
                    ->addColumn('email', 'string', ['null'=>true])
                     ->create();

        $tableTurno = $this->table('turno');
        $tableTurno->addColumn('titulo', 'string',['limit'=>60])
                    ->addColumn('descripcion','string',['null'=>true])
                    ->addColumn('socio','integer')
                    ->addColumn('medico','integer')
                    ->addColumn('created', 'timestamp', ['default'=> 'CURRENT_TIMESTAMP'])
                    ->addForeignKey('socio','socio','id')
                    ->addForeignKey('medico','medico','id')
                    ->create();



    }
}
