<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
       'title',
       'content',
       'image',
       'price',
       'isActive',
       'isPopular',
       'isNew',
       'category_id'
    ];
}
