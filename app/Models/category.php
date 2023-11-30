<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['id_kategori','nama_kategori','created_at','updated_at'];

    public function produk()
    {
        return $this->hasMany(product::class,'id_status','id_status');
    }

}
