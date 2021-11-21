<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stockgab extends Model
{
    use HasFactory;
    protected $connection = 'pgsql';
    protected $table = 'stockgab';


    // SELECT 
//   kodebarang, 
//     namabarang, 
//     SUM(CASE WHEN namagudang LIKE '%TOKO%' THEN sisa ELSE 0 END) AS toko, 
//     SUM(CASE WHEN namagudang LIKE '%GUDANG%' THEN sisa ELSE 0 END) AS gudang, 
//     hargajual1, 
//     hargajual2 
// FROM 
//   stockgab 
// GROUP BY kodebarang, namabarang, hargajual1, hargajual2,hargajual3;
    public static function stokgabList(){
        return Stockgab::select('kodebarang','namabarang','satuan','merk','hargajual1','hargajual2','hargajual3','update_time')
                            ->selectRaw("SUM(CASE WHEN namagudang LIKE '%TOKO%' THEN sisa ELSE 0 END) AS toko")
                            ->selectRaw("SUM(CASE WHEN namagudang LIKE '%GUDANG%' THEN sisa ELSE 0 END) AS gudang")
                            ->groupby('kodebarang','namabarang','satuan','merk','hargajual1','hargajual2','hargajual3','update_time');
    }
    public static function stoksearch($param){
        return Stockgab::select('kodebarang','namabarang','satuan','merk','hargajual1','hargajual2','hargajual3','update_time')
                            ->selectRaw("SUM(CASE WHEN namagudang LIKE '%TOKO%' THEN sisa ELSE 0 END) AS toko")
                            ->selectRaw("SUM(CASE WHEN namagudang LIKE '%GUDANG%' THEN sisa ELSE 0 END) AS gudang")
                            // ->where('merk','like','%'.$param.'%')`
                            ->whereRaw("namabarang ILIKE '%$param%'")
                            ->orWhere('merk','ILIKE','%'.$param.'%')
                            ->groupby('kodebarang','namabarang','satuan','merk','hargajual1','hargajual2','hargajual3','update_time');
    }
}
