<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'news_id';

    protected $fillable = [
        'date',
        'image_header_by',
        'description',
        'image',
    ];
}