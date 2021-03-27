<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faskes extends Migration
{
	public function up()
  {
        $this->forge->addField([
            'id' => ['type' => 'int', 'autoincrement' => true],
            'nama' => ['type' => 'varchar', 'constraint' => 255],
            'telp' => ['type' => 'varchar', 'constraint' => 15],
            'email' => ['type' => 'varchar', 'constraint' => 255],
            'alamat' => ['type' => 'text'],
            'info' => ['type' => 'text'],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey(['telp', 'email']);
        $this->forge->createTable('faskes', true);
	}

	public function down()
	{
        $this->forge->dropTable('faskes', true, true);
	}
}
