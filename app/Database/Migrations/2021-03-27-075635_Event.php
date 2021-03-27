<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Event extends Migration
{
	public function up()
  {
        $this->forge->addField([
            'id' => ['type' => 'int', 'autoincrement' => true],
            'id_faskes' => ['type' => 'int'],
            'nama' => ['type' => 'varchar', 'constraint' => 255],
            'desc' => ['type' => 'text'],
            'status' => ['type' => 'enum', 'constraint' => ['Buka', 'Tutup']],
            'kuota' => ['type' => 'int', 'default' => 200],
        ]);
        $this->forge->addPrimaryKey('id');
				$this->forge->addForeignKey('id_faskes', 'faskes', 'id');
        $this->forge->createTable('event', true);
	}

	public function down()
	{
        $this->forge->dropTable('event', true, true);
	}
}
