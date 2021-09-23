<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agrement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','description'
    ];

    public $timestamps = false;

    public function appartement() {
        return $this->belongsToMany(Appartement::class);
    }
}
