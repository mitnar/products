<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeByTitle($query, ?string $title)
    {
        if(!empty($title)) {
            $query->where('title', 'like', "%$title%");
        }
    }

    public function scopeByCode($query, ?string $code)
    {
        if(!empty($code)) {
            $query->whereCode($code);
        }
    }

    public function scopeByColor($query, ?string $color)
    {
        if(!empty($color)) {
            $query->whereColor($color);
        }
    }

    public function scopeByPrice($query, ?int $priceStart, ?int $priceEnd)
    {
        if(!empty($priceStart)) {
            $query->where('price', '>=', $priceStart);
        }

        if(!empty($priceEnd)) {
            $query->where('price', '<=', $priceEnd);
        }
    }

    public function scopeBySize($query, ?int $size)
    {
        if(!empty($size)) {
            return $query->whereSize($size);
        }
    }

    public function scopeByDescription($query, ?string $description)
    {
        if(!empty($description)) {
            return $query->where('description', 'like', "%$description%");
        }
    }
}
