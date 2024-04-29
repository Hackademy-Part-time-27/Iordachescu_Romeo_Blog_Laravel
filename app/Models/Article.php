<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'title', 'description'];

    public function categories()
    {
        return $this->belongsToMany(Category::class,);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}