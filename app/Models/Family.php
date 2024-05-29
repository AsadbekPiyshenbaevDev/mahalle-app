<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function nationality() {
        return $this->belongsTo(Nationality::class);
    }
    public function relative() {
        return $this->belongsTo(Relative::class);
    }
    public function city() {
        return $this->belongsTo(City::class);
    }
    public function country() {
        return $this->belongsTo(Country::class);
    }
    public function gender() {
        return $this->belongsTo(Gender::class);
    }
    public function house() {
        return $this->belongsTo(House::class);
    }
}
