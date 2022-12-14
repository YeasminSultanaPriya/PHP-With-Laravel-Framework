<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['blog_title','blog_author','blog_description','image'];
    private static $blog, $blogImage, $blogImageName, $blogImageDirectory, $blogImageUrl;

    public static function saveImage($request){

        self::$blogImage = $request->file('image');
        self::$blogImageName = time().'.'.self::$blogImage->getClientOriginalExtension();
        self::$blogImageDirectory = 'upload-files/';
        self::$blogImage->move(self::$blogImageDirectory, self::$blogImageName);
        self::$blogImageUrl = self::$blogImageDirectory.self::$blogImageName;
        return self::$blogImageUrl;

    }

    public static function createBlog($request){

        self::$blog                     = new Blog();
        self::$blog->blog_title         = $request->blog_title;
        self::$blog->blog_author        = $request->blog_author;
        self::$blog->blog_description   = $request->blog_description;
        self::$blog->image              = self::saveImage($request);
        self::$blog->save();

    }
}
