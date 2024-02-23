<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    public function getDateCreatedAttribute()
    {
        return Carbon::parse($this->created_at)
            ->timezone('Asia/Manila')
            ->format('M d, Y h:i A');
    }

}
