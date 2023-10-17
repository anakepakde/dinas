<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InputBukti extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function TugasLuar(): BelongsTo {
        return $this->belongsTo(TugasLuar::class);
    }
}
