<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded=[];

    protected $with = ['author', 'category'];
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, 'user_id');
    }

    //    protected $fillable=['title', 'excerpt', 'body', 'user_id', 'slug', 'category_id'];

    //    public function getRouteKey()
    //    {
    //        return 'slug';
    //    }
}
