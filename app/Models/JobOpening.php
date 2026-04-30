<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOpening extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'icon',
        'subtitle',
        'badge',
        'skills',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'skills'    => 'array',
        'is_active' => 'boolean',
    ];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true)->orderBy('sort_order');
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class, 'job_type', 'slug');
    }
}
