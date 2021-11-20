<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalPiutangTempo extends Model
{
    use HasFactory;
    protected $connection = 'Karya_DB';
    protected $table = 'qglobalpiutangtempo';

}
