<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppartCatalog extends Model
{
    use HasFactory;

    protected $fillable =[
        'image','appartement_id',
    ];

    public $timestamps = false;

    public function appartement ()
    {
        return $this->hasOne(Appartement::class);
    }
}
