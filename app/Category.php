<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';
    protected $fillable =['id','name','image'];
    const UPLOAD_IMAGE_PATH = "uploads/";

    /**
     * Upload photo
     *
     * @param object $photo input photo
     *
     * @return string
     */
    public static function upload($photo)
    {
        $destinationPath = public_path(self::UPLOAD_IMAGE_PATH);
        $imgName = time().'_'.$photo->getClientOriginalName();
        $photo->move($destinationPath, $imgName);
        return $imgName;
    }
}
