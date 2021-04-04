<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

    public function document(): BelongsTo
    {
        return $this->belongsTo(Document::class);
    }

    public function enduser(): BelongsTo
    {
        return $this->belongsTo(Enduser::class);
    }

    public function adder(): BelongsTo
    {
        return $this->belongsTo(User::class,'added_by');
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class,'updated_by');
    }

    public function deleter(): BelongsTo
    {
        return $this->belongsTo(User::class,'deleted_by');
    }
}
