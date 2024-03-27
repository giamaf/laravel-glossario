<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable = ['label', 'url'];
    public function word()
    {
        return $this->belongsTo(Word::class);
    }
}
