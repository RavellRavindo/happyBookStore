<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    public function category(){
        return $this->belongsTo(Categories::class,'category_id');
    }

    public function details(){
        return $this->hasOne(Details::class,'id');
    }
}
