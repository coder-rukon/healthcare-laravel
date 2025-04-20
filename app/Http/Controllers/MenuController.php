<?php

namespace App\Http\Controllers;

use App\Models\MenuModel;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function Index($location = 'main_menu',Request $request )
    {
        // Fetch menu items based on the location
        $data = MenuModel::where('location', $location)->orderBy('menu_order', 'ASC')->paginate(10);
        return view('admin.menu',['data' => $data, 'location' => $location]);
    }

    public function store( $location = 'main_menu',Request $request )
    {
        // Validate and store the menu item
        $request->validate([
            'menu_name' => 'required|string|max:255',
            'location' => $location,
            'menu_link' => 'required',
            'menu_link_target' => 'string|max:10',
            'menu_order' => 'integer',
            'menu_parent' => 'integer'
        ]);

        // Store the menu item in the database
        $menu = MenuModel::create($request->all());
        $menu->location = $location;
        $menu->save();

        return redirect()->route('admin.menu',['location'=>$location])->with('success', 'Menu item created successfully.');
    }
    public function delete($id)
    {
        // Find the menu item by ID and delete it
        $menuItem = MenuModel::findOrFail($id);
        $menuItem->delete();

        return redirect()->route('admin.menu')->with('success', 'Menu item deleted successfully.');
    }
}
