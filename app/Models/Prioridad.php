<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prioridad extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table="prioridads";
    protected $guarded=[];


    public function tickets()
    {
        return $this->hasMany(Ticket::class,'id_prioridad');
    }
}

