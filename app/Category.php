<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'desc'
    ];

    public function updateCategory($request)
    {
        return $this->fill($request->all())->save();
    }

    public function scopeFilter($query)
    {
        return $this::has('words');
    }

    public function words()
    {
        return $this->hasMany(Word::class);
    }

    public function addWord(Word $word)
    {
        $this->save(); 
        return $this->words()->save($word);
    }
}
