<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internet extends Model
{
    use HasFactory;

    protected $table = 'internet';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'cantidad',
        'precio',

    ];

}
