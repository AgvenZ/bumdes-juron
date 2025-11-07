<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bumdes extends Model
{
    protected $fillable = [
        'name',
        'logo_path',
        'sk_path',
        'description',
    ];

    public function organizationPositions(): HasMany
    {
        return $this->hasMany(OrganizationPosition::class);
    }

    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}
