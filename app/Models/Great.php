<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Great extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
