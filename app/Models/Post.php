<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    protected $fillable = ['content', 'user_id', 'tenant_id'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_tenants');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
