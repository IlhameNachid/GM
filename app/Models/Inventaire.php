<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Inventaire extends Model
{
    protected $primaryKey = 'num_article';
    protected $fillable = [
        'num_article', 'image', 'Designation', 'num_inventaire', 'État'
    ];
}