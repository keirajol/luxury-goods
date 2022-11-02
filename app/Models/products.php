<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Session;
use App\Models\Categories;
use App\Models\Brands;
use phpDocumentor\Reflection\Types\This;

class Products extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }

    public function type()
    {
        return $this->belongsTo(Brands::class);
    }
}
