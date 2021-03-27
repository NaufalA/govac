<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vaksin extends Migration
{
	public function up()
  {
        $this->forge->addField([
            'id' => ['type' => 'int', 'autoincrement' => true],
            'nik' => ['type' => 'varchar', 'constraint' => 20],
            'id_vaksinasi' => ['type' => 'int'],
            'jenis' => ['type' => 'varchar', 'constraint' => 255],
            'desc' => ['type' => 'text'],
        ]);
        $this->forge->addPrimaryKey('id');
	$this->forge->addForeignKey('nik', 'user', 'nik');
	$this->forge->addForeignKey('id_vaksinasi', 'event_vaksinasi', 'id');
        $this->forge->addUniqueKey('nik');
        $this->forge->createTable('vaksin', true);
	}

	public function down()
	{
        $this->forge->dropTable('vaksin', true, true);
	}
}
