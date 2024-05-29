<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebooktype extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function notebooks()
    {
        return $this->hasMany(Notebook::class);
    }
}
