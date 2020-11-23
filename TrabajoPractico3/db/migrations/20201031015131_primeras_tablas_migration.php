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
    // public function change(): void
    // {

        
    //     $tableSocio = $this->table("socio");
    //     $tableSocio->addColumn('nombre', 'string', ['limit'=>60])
    //                 ->addColumn('email', 'string', ['null'=>true])
    //                 ->create();
            
    //     $tableEspecialidad = $this->table('especialidad');
    //     $tableEspecialidad->addColumn('descipcion', 'string', ['limit'=>60])
    //                                   ->create(); 

    //     $tableMedico = $this->table("medico");
    //     $tableMedico->addColumn('nombre', 'string', ['limit'=>60])
    //                 ->addColumn('email', 'string', ['null'=>true])
    //                 ->addColumn('matricula', 'integer')
    //                 ->addColumn('especialidad', 'integer')
    //                 ->addForeignKey('especialidad','especialidad','id')
    //                 ->create();


    //     $tableTurno = $this->table('turno');
    //     $tableTurno->addColumn('dia','date')
    //                 ->addColumn('hora','date')
    //                 ->addColumn('socio','integer')
    //                 ->addColumn('medico','integer')
    //                 ->addColumn('created', 'timestamp', ['default'=> 'CURRENT_TIMESTAMP'])
    //                 ->addForeignKey('socio','socio','id')
    //                 ->addForeignKey('medico','medico','id')
    //                 ->create();
    // }

    public function up()
    {
        
      $tableSocio = $this->table("socio");
      $tableSocio->addColumn('nombre', 'string', ['limit'=>60])
                  ->addColumn('email', 'string', ['null'=>true])
                  ->create();
          
      $tableEspecialidad = $this->table('especialidad');
      $tableEspecialidad->addColumn('descipcion', 'string', ['limit'=>60])
                                    ->create(); 

      $tableMedico = $this->table("medico");
      $tableMedico->addColumn('nombre', 'string', ['limit'=>60])
                  ->addColumn('email', 'string', ['null'=>true])
                  ->addColumn('matricula', 'integer')
                  ->addColumn('especialidad', 'integer')
                  ->addForeignKey('especialidad','especialidad','id')
                  ->create();


      $tableTurno = $this->table('turno');
      $tableTurno->addColumn('dia','string')
                  ->addColumn('hora','string')
                  ->addColumn('socio','string')
                  ->addColumn('medico','integer')
                  ->addForeignKey('medico','medico','id')
                  ->create();
        // execute()
        $this->execute('DELETE FROM turno');
        $this->execute('DELETE FROM socio');
        $this->execute('DELETE FROM medico');
        $this->execute('DELETE FROM especialidad');
        $rows = [
            [
              'id'    => 1,
              'descipcion'  => 'neurocirujano'
            ],
            [
              'id'    => 10,
              'descipcion'  => 'guardia'
            ]
        ];

        $this->table('especialidad')->insert($rows)->save();

        // $tableMedico->addColumn('nombre', 'string', ['limit'=>60])
        //             ->addColumn('email', 'string', ['null'=>true])
        //             ->addColumn('matricula', 'integer')
        //             ->addColumn('especialidad', 'integer')
        //             ->addForeignKey('especialidad','especialidad','id')
        //             ->create();
        $rows = [
            [
              'id'    => 1,
              'nombre'  => 'carlitos calin',
              'email'  => 'carlitos@gmail.com',
              'matricula'  => 1,
              'especialidad'  => 1            ],
            [
                'id'    => 10,
                'nombre'  => 'pepe gonzales',
                'email'  => 'pepito@gmail.com',
                'matricula'  => 10,
                'especialidad'  => 10  
            ]
        ];

        $this->table('medico')->insert($rows)->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}
