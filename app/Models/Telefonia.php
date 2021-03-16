<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefonia extends Model
{
    use HasFactory;

    protected $table = 'telefonia';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'cantidad',
        'precio',

    ];


}
