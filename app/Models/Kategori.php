<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable =['name' ,'slug'];

    public function rak()
    {
        return $this->hasMany(Rak::class);
    }

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
