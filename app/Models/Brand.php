<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table="brand";
    protected $fillable=['brand_name'];
    protected $primaryKey = "brand_id";
    public $timestamps = "false";

    public function products()
    {
        return $this->hasMany('Product','brand_name','brand_id');
    }
}
