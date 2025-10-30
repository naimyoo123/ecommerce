<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','description','price','category_id','image','stock'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function index()
{
    return response()->json(Product::with('category')->get());
}
}

