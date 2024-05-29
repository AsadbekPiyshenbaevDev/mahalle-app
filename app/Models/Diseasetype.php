<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diseasetype extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function diseases()
    {
        return $this->hasMany(Disease::class);
    }
}
