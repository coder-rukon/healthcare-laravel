<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSectionModel extends Model
{
    protected $table = 'home_sections';
    protected $primaryKey = 'section_id';
    public $timestamps = true;

    protected $fillable = [
        'section_name',
        'section_content',
        'section_order',
    ];

    protected $casts = [
        'section_order' => 'integer',
    ];
}
