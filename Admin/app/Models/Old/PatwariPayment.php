<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatwariPayment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function patwari()
    {
        return $this->belongsTo(Patwari::class, 'patwari_id');
    }
}
