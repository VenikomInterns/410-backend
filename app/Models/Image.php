<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'url'];


    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        self::deleting(function (Image $image) {
            Storage::delete($image->getRawOriginal('name'));
        });
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}