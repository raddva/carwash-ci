<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionModel extends Model
{
    protected $table = 'transactions';
    protected $allowedFields = ['no_bukti_transaksi', 'no_polisi', 'pemilik', 'tanggal', 'jenis_kendaraan', 'tarif', 'status'];
    protected $useTimeStamps = false;
    protected $useSoftDeletes = false;
    protected $validationRules = [];
    protected $validationMessages = [];

    protected $skipValidation = false;
}
