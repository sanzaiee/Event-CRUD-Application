<?php

namespace App\Models\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;

    protected $table = "events";

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'status'
    ];

    use SoftDeletes;
}
