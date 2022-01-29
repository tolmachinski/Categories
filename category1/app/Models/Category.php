<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['id','title', 'parent_id'];

    public function children()
    {   
        
        return $this->hasMany(self::class, 'parent_id');
    }
}
