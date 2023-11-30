<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = ['id_produk','nama_produk','harga','kategori_id','status_id','created_at','updated_at'];

    public function kategori()
    {
        return $this->belongsTo(category::class,'kategori_id','id_kategori');
    }
    
    public function status()
    {
        return $this->belongsTo(status::class,'status_id','id_status');
    }
}
