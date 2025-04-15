<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campo extends Model
{
    protected $fillable = ['nome', 'posizione', 'immagine_url'];

}
