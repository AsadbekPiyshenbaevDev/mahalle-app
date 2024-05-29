<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $table='houses';

    protected $guarded = ['id'];

    public function street() {
        return $this->belongsTo(Street::class);
    }

    public function nationality() {
        return $this->belongsTo(Nationality::class);
    }
    public function gender() {
        return $this->belongsTo(Gender::class);
    }
    public function families() {
        return $this->hasMany(Family::class);
    }
    public function city () {
        return $this->belongsTo(City::class);
    }
}
