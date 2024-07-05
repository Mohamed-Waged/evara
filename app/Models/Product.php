<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'desc', 'price', 'images'];
    protected $guarded = ['id', 'created_at', 'updated-at'];

    protected $casts = [
        'images' => 'array',
    ];

    // one to one
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
