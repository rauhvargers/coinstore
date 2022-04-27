<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'production_year', 'price'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
