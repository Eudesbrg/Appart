<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppartAutorisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'appartement_id','autorisation_id',
    ];

    public $timestamps = false;
}
