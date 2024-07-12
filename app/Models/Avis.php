<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avis extends Model
{
    use HasFactory;
    protected $fillable = [
        'livreur_id',
        'user_id',
        'note',
        'comment',


        'pubPicture'
    ];
}
