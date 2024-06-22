<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Timetable extends Model
{
    use HasFactory;
        public function user() : BelongsTo
        {
            return $this->belongsTo(User::class);
        }
        public function subject() : BelongsTo
        {
            return $this->belongsTo(Subject::class);
        }
        public function classroom() : BelongsTo
        {
            return $this->belongsTo(classroom::class);
        }
        public function level() : BelongsTo
        {
            return $this->belongsTo(Level::class);
        }
    protected $fillable = [
        'start_time', 'end_time', 'week', 'user_id', 'subject_id', 'classroom_id', 'level_id',
    ];
}
