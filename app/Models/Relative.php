<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    use HasFactory;

    protected $fillable = ['name','id'];

    public function families(){
        return $this->hasMany(Family::class);
    }
}
