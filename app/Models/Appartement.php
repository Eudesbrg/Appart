<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'description',
        'image',
        'nombre_toilet',
        'nombre_lit',
        'superficie',
        'avance',
        'monthPrice',
        'category_id',
        'quartier_id',
    ];

    public function appartcategory () {
        return $this->hasOne(AppartCategory::class);
    }

    public function quartier () {
        return $this->hasOne(Quartier::class);
    }

    public function appartcatalog() {
        return $this->belongsTo(AppartCatalog::class);
    }

    public function autorisation() {
        return $this->belongsToMany(Autorisation::class);
    }

    public function agrement() {
        return $this->belongsToMany(Agrement::class);
    }
}
