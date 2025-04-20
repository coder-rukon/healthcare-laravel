<?php

namespace App\Http\Controllers;

use App\Models\SettingsModel;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $data = SettingsModel::all();
        $dataListToArray = [];
        foreach ($data as $item) {
            $dataListToArray[$item->settings_name] = $item->settings_value;
        }
        return view('admin.settings.index',['data' => $dataListToArray]);
    }

    public function store(Request $request)
    {
        $allData = $request->all();
        foreach ($allData as $settingsKey => $settingValue) {
            $settingsModel = SettingsModel::where('settings_name', $settingsKey)->first();
            if ($settingsModel) {
                $settingsModel->settings_value = $settingValue;
                $settingsModel->save();
            } else {
                SettingsModel::create([
                    'settings_name' => $settingsKey,
                    'settings_value' => $settingValue,
                ]);
            }
        }
        return redirect()->route('settings')->with('success', 'Settings updated successfully.');
    }
}
