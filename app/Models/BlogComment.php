<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    use HasFactory;
    protected $table = "blogs_comments";
    protected $primaryKey = "id";
    protected $fillable = ['blog_id','user_id','email','name','messages'];



    public function blog(){
        return $this->belongsTo('Product','blog_id','id');
    }
}
