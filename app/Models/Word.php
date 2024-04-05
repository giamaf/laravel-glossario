<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Word extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['term', 'description', 'slug'];

    public function getFormattedDate($column, $format = 'd-m-Y')
    {
        return Carbon::create($this->$column)->format($format);
    }


    public function getAbstract($length)
    {
        return substr($this->description, 0, $length) . '...';
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
