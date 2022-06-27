<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceContent extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_id",
        "text",
        "published_date"
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
