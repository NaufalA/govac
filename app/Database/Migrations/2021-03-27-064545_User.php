<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'nik' => ['type' => 'varchar', 'constraint' => 20],
            'telp' => ['type' => 'varchar', 'constraint' => 15],
            'email' => ['type' => 'varchar', 'constraint' => 255],
            'nama' => ['type' => 'varchar', 'constraint' => 255],
            'alamat' => ['type' => 'text'],
            'tgl_lahir' => ['type' => 'datetime'],
            'password' => ['type' => 'varchar', 'constraint' => 255],
        ]);
        $this->forge->addPrimaryKey('nik');
        $this->forge->addUniqueKey(['telp', 'email']);
        $this->forge->createTable('user', true);
	}

	public function down()
	{
        $this->forge->dropTable('user', true, true);
	}
}
