<?php

namespace App\Models;
use Illuminate\Support\Str;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'title',
        'description',
        'date',
        'user_id',
        'image',
    ]; 

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
//polymorphic
    public function comments()
    {
        
        return $this->morphMany(Comment::class, 'commentable')->whereNull('blog_id');
    }

    public function reactor()
    {
        return $this->hasMany(Reactor::class);
    }

    public function likes()
    {
        return $this->hasMany(Reactor::class)->where('like',1);
    }

    public function dislikes()
    {
        return $this->hasMany(Reactor::class)->where('like',0);
    }
}
