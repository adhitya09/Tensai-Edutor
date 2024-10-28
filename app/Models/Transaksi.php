<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $dates = ['rencana_mulai_kelas']; // Menentukan kolom yang harus diubah menjadi Carbon
    protected $guarded = ['id'];
}
