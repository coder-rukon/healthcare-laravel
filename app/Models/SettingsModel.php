<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingsModel extends Model
{
    protected $table = 'settings';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'settings_name',
        'settings_value',
    ];

    // Define any relationships or additional methods if needed
}
