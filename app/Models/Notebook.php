<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function client () {
        return $this->belongsTo(Client::class);
    }   
    public function street () {
        return $this->belongsTo(Street::class);
    }
    public function notebooktype () {
        return $this->belongsTo(Notebooktype::class);
    }
}
