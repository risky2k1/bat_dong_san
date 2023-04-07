<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'id          ',
        'name        ',
        'description ',
        'total_price ',
        'price_meter ',
        'location    ',
        'area        ',
        'rooms       ',
        'bedrooms    ',
        'bathrooms   ',
        'air_condition',
        'swimming_poo',
        'central_heat',
        'laundry_room',
        'gym         ',
        'window_cover',
        'internet    ',
        'is_active   ',
    ];
    protected $table = 'properties';

    public function categories(  )
    {
        return $this->belongsToMany(Category::class);
    }
}
