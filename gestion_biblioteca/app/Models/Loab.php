<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loab extends Model
{
    use HasFactory;

    protected $table = "loabs";

    public function books(){
        return $this->belongsTo(Books::class);
    }
}
