<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Street extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function houses() {
        return $this->hasMany(House::class);
    }
    public function abroads() {
        return $this->hasMany(Abroad::class);
    }
    public function notebooks() {
        return $this->hasMany(Notebook::class);
    }
}
