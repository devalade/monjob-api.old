<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory, HasUuids;

    protected $keyType = 'uuid';
    protected $primaryKey = 'id';

    protected $casts = [
        'lg' => 'float',
        'lt' => 'float'
    ];

    protected $fillable = [
        'social_reason',
        'ifu',
        'rccm',
        'phone_number',
        'email',
        'lg',
        'lt',
        'address',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
