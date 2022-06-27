<?php

namespace App\Models;

use App\Models\ServiceContent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["title"];

    public function contents() : HasMany
    {
        return $this->hasMany(ServiceContent::class)->orderByDesc("id");
    }
}
