<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    private static $image;
    private static $directory;
    private static $product;
    private static $imageName;
    private static $imageURL;
    public static function getImageUrl($request)
    {

        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'product-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }
    public static function newProduct($request)
    {
        self::$product = new Product();

//        self::$product->name = $request->name;
//        self::$product->category = $request->category;
//        self::$product->brand = $request->brand;
//        self::$product->price = $request->price;
//        self::$product->description = $request->description;
//        self::$product->image = self::getImageUrl($request);//upore getimage url ache
//        self::$product->save();

        self::saveBasicInfo(self::$product, $request,self::get);

    }
    public static function updateProduct($request, $id)
    {
       self::$product = Product::find($id);
       if($request->file('image'))
       {
           if(file_exists(self::$product->image))
           {
               unlink(self::$product->image);

           }
           self::$imageURL = self::getImageUrl($request);
           else
               {
               self::$imageURL = self::$product->image;
           }
           self::saveBasicInfo(self::$product,$request,self::$imageURL);
       }
       private static function saveBasicInfo($product, $request, $imageURL)
    {
        $product->name = $request->name;
        $product->category = $request->category;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->image = $imageURL;
        $product->save();



    }
}
}
