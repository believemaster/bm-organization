<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    // Question belobgs to user

    protected $fillabale = ['title', 'body'];    // Attributes

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Mutator
     *
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
