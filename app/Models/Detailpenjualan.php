<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenjualan extends Model
{
    use HasFactory;
 
    protected $fillable = [
       'tanggal_penjualan',
        'total_harga',
        
        
        'id_pelanggan',
    ];

    public function penjualan(){
    
        return $this->hasMany(Penjualan::class, 'id_pelanggan','id');
    }
}
