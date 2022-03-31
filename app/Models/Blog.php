<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Blog extends Model
{
    use HasFactory;

    private static $blog;
    private static $image;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageURL($request){

        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'blog-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newBlog($request){

        self::$blog = new Blog();
        self::$blog->category_id = $request->category_id;
        self::$blog->author_id = Auth::user()->id;
        self::$blog->main_title = $request->main_title;
        self::$blog->sub_title = $request->sub_title;
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->image = self::getImageURL($request);
        self::$blog->save();
    }

    public function category(){

        return $this->belongsTo('App\Models\Category');
    }
    public static function updateBlog($request, $id){
        self::$blog = Blog::find($id);
        if ($request->file('image')){

            if (file_exists(self::$blog->image)){

                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageURL($request);
        }
        else{

            self::$imageUrl = self::$blog->image;
        }
        self::$blog->category_id = $request->category_id;
        self::$blog->main_title = $request->main_title;
        self::$blog->sub_title = $request->sub_title;
        self::$blog->short_description = $request->short_description;
        self::$blog->long_description = $request->long_description;
        self::$blog->image   = self::$imageUrl;
        self::$blog->save();
    }

}
