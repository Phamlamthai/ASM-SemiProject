<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders_details extends Model
{
    use HasFactory;
    protected $table="orders-details";
    protected $fillable=['order_id','product_id','qty','amount'];
    protected $primaryKey = "id";
    public $timestamps = "false";


    public function order(){
        return $this->belongsTo('Orders','order_id','id');
    }

    public function product(){
        return $this->belongsTo('Product','product_id','id');
    }
}
