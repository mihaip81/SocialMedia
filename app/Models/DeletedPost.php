<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeletedPost extends Model
{
    use HasFactory;

    protected $table = 'deleted_posts';

    protected $fillable = [
        'username',
        'description',
        'image',
    ];


}
