<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

	protected $fillable = [

        'user_id',
        'user_id',
        'title',
        'title_down',
        'name',
        'description',
        'image_url',

    ];
}
