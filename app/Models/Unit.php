<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    protected $fillable = [
        'bumdes_id',
        'name',
        'description',
        'manager_name',
        'manager_phone',
    ];

    public function bumdes(): BelongsTo
    {
        return $this->belongsTo(Bumdes::class);
    }

    public function photos(): HasMany
    {
        return $this->hasMany(UnitPhoto::class);
    }
}
