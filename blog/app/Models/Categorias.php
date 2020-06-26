<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    public $timestamps = true;
    protected $fillable = [
        'descricao',
        'slug',
        'submenu',
        'menu_id',
    ];
}
