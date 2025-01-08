<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransactionTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'no_bukti_transaksi' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'no_polisi' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'pemilik' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'tanggal' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
            'jenis_kendaraaan' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'tarif' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['proses', 'selesai', 'batal'],
                'default'    => 'proses',
            ],
        ]);

        $this->forge->addKey('id', true); // Primary key
        $this->forge->createTable('transactions'); // Table name
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
