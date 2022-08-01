<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table="orders";
    protected $fillable=['order_name','phone','email','town_city','country'];
    protected $primaryKey = "order_id";
    public $timestamps = "false";



    public function ordersDetails(){
        return $this->hasMany('Orders_details','order_id','id');
    }
}
