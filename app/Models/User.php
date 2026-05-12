<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Override;

class User extends Authenticatable 
{
    /** @use HasFactory */
    use HasFactory;
    
    //** @fillable fields */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // RELANTIONSHIPS
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class);
    }

    // RULES 
    public function casts(): array
    {
        return [
            'password' => 'hashed'
        ];
    }
}