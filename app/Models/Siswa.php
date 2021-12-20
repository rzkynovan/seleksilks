<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = 'id_siswa';
    protected $guarded = 'id_siswa';
    protected $increment = 'true';
    protected $fillable = ['nama_siswa', 'email_siswa', 'alamat_siswa', 'notlp_siswa', 'kelas_siswa'];
}
