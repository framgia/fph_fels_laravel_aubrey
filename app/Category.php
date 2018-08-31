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
}
