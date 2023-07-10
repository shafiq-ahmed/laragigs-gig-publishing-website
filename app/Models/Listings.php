<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;

    protected $fillable=['company','title','description','tags','email','location','website','logo','user_id'];

    public function scopeFilter($query, array $filters)
    {
        //query for tags
        if($filters['tag'] ?? false)
        {
            //dd($filters['tag']);
            $query->where('tags','like', '%'.request('tag').'%');
        }
        //query for search
        if($filters['search'] ?? false)
        {
            //dd($filters['tag']);
            $query->where('title','like', '%'.request('search').'%')
                    ->orWhere('description','like', '%'.request('search').'%')
                    ->orWhere('tags','like', '%'.request('search').'%') ;
        }
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
