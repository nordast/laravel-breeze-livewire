<?php

namespace App\Models;

use App\Enums\PriorityType;
use App\Enums\StatusType;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'slug', 'description', 'status', 'priority', 'deadline'];

    protected $casts = [
        'deadline' => 'datetime',
        'status'   => StatusType::class,
        'priority' => PriorityType::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

