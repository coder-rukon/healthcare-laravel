<?php

namespace App\Http\Controllers;

use App\Models\HomeSectionModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function IndexFrontend()
    {
        $data = HomeSectionModel::orderBy('section_order', 'asc')->paginate(10);
        return view('home',[
            'data' => $data,
        ]);
    } public function Index()
    {
        $data = HomeSectionModel::orderBy('section_order', 'asc')->paginate(10);
        return view('admin.home.index',[
            'data' => $data,
        ]);
    }
    public function create()
    {
        return view('admin.home.create');
    }
    public function createRequest(Request $request)
    {
        // Validate and store the home section
        $request->validate([
            'section_name' => 'required|string|max:255',
            'section_content' => 'required',
            'section_order' => 'required|integer',
        ]);

        // Store the home section in the database
        $homeSection = HomeSectionModel::create($request->all());
        $homeSection->save();

        return redirect()->route('admin.home')->with('success', 'Home section created successfully.');
    }
    public function edit($section_id)
    {
        $data = HomeSectionModel::find($section_id);
        return view('admin.home.edit', [
            'data' => $data,
        ]);
    }
    public function editRequest(Request $request, $section_id)
    {
        // Validate and update the home section
        $request->validate([
            'section_name' => 'required|string|max:255',
            'section_content' => 'required',
            'section_order' => 'required|integer',
        ]);

        // Update the home section in the database
        $homeSection = HomeSectionModel::find($section_id);
        $homeSection->update($request->all());
        $homeSection->save();

        return redirect()->route('admin.home')->with('success', 'Home section updated successfully.');
    }
    public function delete($section_id)
    {
        // Delete the home section from the database
        $homeSection = HomeSectionModel::find($section_id);
        if ($homeSection) {
            $homeSection->delete();
            return redirect()->route('admin.home')->with('success', 'Home section deleted successfully.');
        } else {
            return redirect()->route('admin.home')->with('error', 'Home section not found.');
        }
    }
}
