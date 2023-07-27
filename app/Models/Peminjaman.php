<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table='peminjaman';
    protected $fillable=['kode_pinjam', 'peminjam_id','petugas_pinjam' ,'petugas_kembali', 'status', 'denda', 'tanngal_pinjam', 'tanngal_kembali', 'tanngal_pengembalian'];


    //relasi
    public function detail_peminjaman()
    {
        return $this->hasMany(DetailPeminjaman::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getDendaAttribute($value)
    {
        return ($value) ?? '-' ;
    }
    

}
