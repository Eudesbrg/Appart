<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autorisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'autorisation'
    ];

    public $timestamps = false;

    public function appartement() {
        return $this->belongsToMany(Appartement::class);
    }
}
