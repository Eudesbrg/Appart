<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','image','ville_id'
    ];

    public $timestamps = false;

    public function appartement ()
    {
        return $this->belongsTo(Appartement::class);
    }
}
