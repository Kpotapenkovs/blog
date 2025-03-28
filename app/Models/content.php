<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Content extends Model
{
    protected $fillable = ["contents"];


    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }

}
