<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'menu_id';
    protected $fillable = [
        'menu_name',
        'menu_link',
        'menu_link_target',
        'menu_order',
        'menu_parent'
    ];
}
