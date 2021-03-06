<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function parent()
{
    return $this->belongsTo('App\Models\Category', 'parent_id');
}

public function children()
{
    return $this->hasMany('App\Models\Category', 'parent_id');
}
    use HasFactory;
}
/*@foreach($navigation as $item)
    @if($item->children->count() > 0)*/
