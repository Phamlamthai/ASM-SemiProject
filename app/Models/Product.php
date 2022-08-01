<?php

namespace App\Models;
use App\Models\ProductImage;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="products";
    protected $fillable=['product_name','product_price','product_des','product_brand','product_category_id','content','weight','qty','discount','tag','featured'];
    protected $primaryKey = "product_id";
    public $timestamps = "false";


    public function brand(){
        return $this->belongsTo('Brand','brand_id','id');
    }

    public function productCategory(){
        return $this->belongsTo('ProductCategory','id','name');
    }

    public function productImages(){
        return $this->hasMany('ProductImage','path','id');
    }

    public function productDetails(){
        return $this->hasMany('Product_details','product_id','id');
    }

    public function productComments(){
        return $this->hasMany('ProductComment','product_id','id');
    }

    public function ordersDetails(){
        return $this->hasMany('Orders_details','product_id','id');
    }
}
