<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function receivings()
    {
        return $this->hasMany(AgentReceiving::class, 'agent_id');
    }
}
