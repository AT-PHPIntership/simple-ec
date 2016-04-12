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
        'save_to'    => 'slug',
        'on_update'  => true,
    ];

    protected $perPage = 10;

    const UPLOAD_IMAGE_PATH = 'uploads/';
    protected $table = 'products';

    protected $fillable = [
        'name', 'price', 'description', 'image', 'category_id', 'quantity'
    ];

    /**
     * Get list category
     *
     * @return category
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * Get the order detail.
     *
     * @return ordersDetail
     */
    public function ordersDetail()
    {
        return $this->hasMany('App\Models\OrdersDetail');
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
        $destinationPath = public_path(self::UPLOAD_IMAGE_PATH);
        $imgName = time().'_'.$photo->getClientOriginalName();
        $photo->move($destinationPath, $imgName);
        return $imgName;
    }
}
