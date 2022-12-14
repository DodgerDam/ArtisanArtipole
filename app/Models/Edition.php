<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edition extends Model
{
    use HasFactory;

    protected $fillable = [ "edition_name", "summary", "content_1", "content_2", "content_3" ];
}
