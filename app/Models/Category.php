<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;


    public $translatable = ['name'];

    protected $fillable = ['name','image' ,'color', 'status'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['imageUrl'];

    /**
     * Appends Admin Image Url
     *
     */
    public function getImageUrlAttribute($value): string
    {
        return asset('storage/' . $this->image);
    }

    /**
     * Get the workers for the category.
     */
    public function workers(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Worker::class);
    }

}
