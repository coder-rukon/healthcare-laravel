<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function Index()
    {
        $data = MenuModel::orderBy('menu_order', 'ASC')->paginate(10);
        return view('admin.menu',['data' => $data]);
    }
    public function create()
    {
        return view('menu.create');
    }
    public function store(Request $request)
    {
        // Validate and store the menu item
        $request->validate([
            'menu_name' => 'required|string|max:255',
            'menu_link' => 'required',
            'menu_link_target' => 'string|max:10',
            'menu_order' => 'integer',
            'menu_parent' => 'integer'
        ]);

        // Store the menu item in the database
        MenuModel::create($request->all());

        return redirect()->route('admin.menu')->with('success', 'Menu item created successfully.');
    }
    public function delete($id)
    {
        // Find the menu item by ID and delete it
        $menuItem = MenuModel::findOrFail($id);
        $menuItem->delete();

        return redirect()->route('admin.menu')->with('success', 'Menu item deleted successfully.');
    }
}
