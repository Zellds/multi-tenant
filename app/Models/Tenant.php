<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function tenants()
    {
        return $this->belongsToMany(Tenant::class, 'user_tenants');
    }
}
