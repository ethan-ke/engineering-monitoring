<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class FrontendUser extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $guarded = [];

    /**
     * @return HasMany
     */
    public function item(): HasMany
    {
        return $this->hasMany(VideoItem::class);
    }
}
