<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppartCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 'slug',
    ];

    public $timestamps = false;


    public function appartement ()
    {
        return $this->belongsTo(Appartement::class);
    }
}
