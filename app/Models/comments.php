<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $fillable=[
        'username',
        'description',
        'blog_id'
    ];

    public
     function blog(){
        return $this->belongsTo(Blogs::class,'blog_id');
    }
}
