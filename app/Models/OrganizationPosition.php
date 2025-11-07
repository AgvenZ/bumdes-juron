<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrganizationPosition extends Model
{
    protected $fillable = [
        'bumdes_id',
        'title',
        'name',
        'photo_path',
        'phone',
        'order_num',
    ];

    public function bumdes(): BelongsTo
    {
        return $this->belongsTo(Bumdes::class);
    }
}
