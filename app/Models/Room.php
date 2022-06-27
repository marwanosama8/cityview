<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Room extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'rooms';

    protected $fillable = [
        'room_name', 'room_price', 'max_adults', 'max_children'
    ];

    /**
     * The categories that belong to the Room
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_rooms', 'room_id', 'category_id');
    }
}
