<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empoyment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function employmenttype () {
        return $this->belongsTo(Employmenttype::class);
    }
}
