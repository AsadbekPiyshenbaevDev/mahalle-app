<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nationality extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function families() {
        return $this->hasMany(Family::class);
    }

    public function houses() {
        return $this->hasMany(House::class);
    }
}
