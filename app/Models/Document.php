<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    protected $fillable = [
        'bumdes_id',
        'title',
        'doc_path',
        'doc_type',
    ];

    public function bumdes(): BelongsTo
    {
        return $this->belongsTo(Bumdes::class);
    }
}
