<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = [];

    public function getFormattedCreatedAtAttribute(): string
    {
        return $this->created_at->format('d.m.Y, H:i:s');
    }

    public function getFormattedUpdatedAtAttribute(): string
    {
        return $this->updated_at->format('d.m.Y, H:i:s');
    }
}
