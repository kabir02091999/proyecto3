<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    use HasFactory;

    protected $table = 'cable';/* a qui decia ccanla */

    public $timestamps = false;
    protected $fillable = [
        'nombre',
        'canales',
        'precio',

    ];
}
