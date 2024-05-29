<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employmenttype extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function empoyments()
    {
        return $this->hasMany(Empoyment::class);
    }
}
