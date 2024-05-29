<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function position (){
        return $this->belongsTo(Position::class);
    }
    public function city (){
        return $this->belongsTo(City::class);
    }
}
