<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_details extends Model
{
    use HasFactory;
    protected $table="product_details";
    protected $fillable=['product_id','color','qty','size'];
    protected $primaryKey = "id";
    public $timestamps = "false";

    public function products(){
        return $this->belongsTo('Product','product_id','id');
    }
}
