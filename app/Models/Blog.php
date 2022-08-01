<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = "blogs";
    protected $primaryKey = "id";
    protected $fillable = ['user_id','title','image','category','content'];

    public function blogComments(){
        return $this->hasany('BlogComments','blog_id','id');
    }
}

