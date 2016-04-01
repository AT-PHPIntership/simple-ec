<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Product extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'keywords',
        'on_update'  => true,
    ];

    const UPLOAD_IMAGE_PATH = '/public/uploads/';
    protected $table = 'products';

    protected $fillable = [
        'name', 'price', 'description', 'image', 'category_id', 'quantity'
    ];

    /**
     * Get the category.
     *
     * @return category
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function ordersDetails()
    {
        return $this->hasMany('App\Models\OrdersDetails');
    }

    /**
     * Upload photo
     *
     * @param object $photo input photo
     *
     * @return string
     */
    public static function upload($photo)
    {
        $destinationPath = base_path() . self::UPLOAD_IMAGE_PATH;
        $imgName = time().'_'.$photo->getClientOriginalName();
        $photo->move($destinationPath, $imgName);
        return $imgName;
    }
}
