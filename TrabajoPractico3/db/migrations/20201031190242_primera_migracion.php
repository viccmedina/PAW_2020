<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class PrimeraMigracion extends AbstractMigration
{
    public function change(): void
    {   
        $this->dropTable("user");
        $userTable = $this->table("user")
            ->addColumn("UserName", "string", ["null" => false])
            ->addColumn("Password", "string", ["null" => false])
            ->create();
        
    }
}
