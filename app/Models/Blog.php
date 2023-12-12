<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    
    use HasFactory;
    protected $guarded=['id'];
    // protected $fillable=['title','intro','body'];
    protected $with=['category', 'author'];

    public function scopeFilter($query, $filter)
    {
        $query->when($filter['search'] ?? false, function ($query, $search) {
             $query->where(function ($query) use ($search) {
                $query->where('title', 'LIKE', '%'.$search.'%')
                  ->orWhere('body','LIKE', '%'.$search.'%');
             });
         });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
