<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    protected $fillable = ['id_status','nama_status','created_at','updated_at'];

    public function produk()
    {
        return $this->hasMany(product::class,'id_kategori','id_kategori');
    }
}
