<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom','prenom','image','numero','email',
    ];

    public $timestamps = false;

    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
