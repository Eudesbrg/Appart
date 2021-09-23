<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppartAgrement extends Model
{
    use HasFactory;

    protected $fillable = [
        'appartement_id','agrement_id',
    ];

    public $timestamps = false;
}
