<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['id_produk','nama_produk','harga','id_kategori','id_status','created_at','updated_at'];

    public function kategori()
    {
        return $this->belongsTo(category::class,'id_kategori','id_kategori');
    }
    
    public function status()
    {
        return $this->belongsTo(status::class,'id_status','id_status');
    }
}
