<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Article extends Model
{
    use Searchable;
    use HasFactory;
    use Sluggable;

    public function sluggable():array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    
    protected $fillable = [
        'price', 'title', 'description',  'city', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }

    public static function toBeRevisionedCount(){
        return Article::where("is_accepted", null)->count();
    }
    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public function toSearchableArray()
    {
        $category = $this->category;
 
        $array = [
            "id" => $this->id,
            "title" =>$this->title,
            "description" =>$this->description,
            "category" => $this->category->name,
            "categoryit" => $this->category->nameit,
            "categoryes" => $this->category->namees,
            "categoryjp" => $this->category->namejp,


        ];
        return $array;
    }
}
