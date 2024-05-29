<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function abroads() {
        return $this->hasMany(Abroad::class);
    } 
    public function abroadwants() {
        return $this->hasMany(Abroadwant::class);
    }
    public function inspectors() {
        return $this->hasMany(Inspector::class);
    }
    public function notebooks() {
        return $this->hasMany(Notebook::class);
    }
    public function wars() {
        return $this->hasMany(War::class);
    }
    public function greats() {
        return $this->hasMany(Great::class);
    }
    public function empoyments() {
        return $this->hasMany(Empoyment::class);
    }
}
