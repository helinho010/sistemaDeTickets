<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table="tickets";
    protected $guarded=[];


    public function prioridad()
    {
        return $this->belongsTo(Prioridad::class,"id_prioridad");
    }
}
