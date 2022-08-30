<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleUpload extends Model
{
    use HasFactory;

    protected $table = 'article_uploads';

    protected $fillable = ['article_id', 'type', 'path'];
}