<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table="product_categories";
    protected $fillable=['name'];
    protected $primaryKey = "id";
    public $timestamps = "false";


    public function products()
    {
        /**
         * Get all of the comments for the ProductCategory
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */  
            return $this->hasMany('Product', 'name', 'id');
        
    }
}

