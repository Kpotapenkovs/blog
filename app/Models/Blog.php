<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
  protected $fillable = ["category"];

  public function contents(): HasMany
  {
      return $this->hasMany(Content::class);
  }

}

