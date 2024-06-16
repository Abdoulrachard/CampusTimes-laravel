<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subject extends Model
{
    use HasFactory;
    public function level() :BelongsTo
    {
        return $this->belongsTo(Level::class) ;
    }
    protected $fillable = [
        'label','code','total_time','level_id',
    ];
}
