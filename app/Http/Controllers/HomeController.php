<?php

namespace App\Http\Controllers;

use App\Models\HomeSectionModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $data = HomeSectionModel::orderBy('section_order', 'asc')->paginate(10);
        return view('admin.home.index',[
            'data' => $data,
        ]);
    }
}
