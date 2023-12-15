<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

// File app/Models/Penduduk.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan oleh model
    protected $table = 'penduduk';

    // Menentukan atribut yang dapat diisi secara massal
    protected $fillable = ['nik', 'nama', 'provinsi', 'kota', 'nomor_telpon'];
}
