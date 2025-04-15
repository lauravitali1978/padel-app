<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prenotazione extends Model
{
    protected $fillable = ['campo_id', 'nome', 'data', 'orario'];

    // Relazione con il campo
    public function campo()
    {
        return $this->belongsTo(Campo::class);
    }}
