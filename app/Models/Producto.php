<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//Here we got the columns of the table
class Producto extends Model
{
    protected $fillable = ['nombre', 'precio', 'adquirido'];
    
    protected $casts = [
        'adquirido' => 'boolean',
        'precio' => 'decimal:2'
    ];
}
