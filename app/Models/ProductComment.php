<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    use HasFactory;
    protected $table="product_Comments";
    protected $fillable=['product_id','user_id','email'];
    protected $primaryKey = "id";
    public $timestamps = "false";

    public function products(){
        return $this->belongsTo('Product','product_id','id');
    }
}
