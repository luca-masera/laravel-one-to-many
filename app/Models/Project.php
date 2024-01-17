<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'title', 'slug', 'body', 'image'];


    public function user()
    {
        return $this->belongTo(User::class);

    }
    public function type()
    {
        return $this->belongTo(Type::class);
    }

}
