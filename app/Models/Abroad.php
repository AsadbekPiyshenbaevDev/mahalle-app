<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abroad extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function client () {
        return $this->belongsTo(Client::class);
    }   
    public function street () {
        return $this->belongsTo(Street::class);
    }
    public function type () {
        return $this->belongsTo(Type::class);
    }
}
