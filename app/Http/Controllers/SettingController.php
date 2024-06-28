<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('dashboard.setting.index', compact('setting'));
    }
    public function edit()
    {
        $setting = Setting::first();
        return view('dashboard.setting.edit', compact('setting'));
    }

    private function deleteFaviconIfExists($filename)
    {
        // Check if the filename is not null and the file exists
        if ($filename && File::exists(public_path('images/' . $filename))) {
            // Delete the file
            File::delete(public_path('images/' . $filename));
        }
    }

    public function update(Request $request, Setting $setting)
    {

        $request->validate([
            'brand_name' => 'required|string|max:255',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle favicon upload if provided
        if ($request->hasFile('favicon')) {

            $setting = Setting::first();

            // Delete old favicon if exists
            $this->deleteFaviconIfExists($setting->favicon);

            // Upload new favicon
            $faviconName = time() . '-' . $request->favicon->getClientOriginalName();
            $request->favicon->move(public_path('images'), $faviconName);

            // Update favicon field in database
            $setting->favicon = $faviconName;
        }

        // Update other fields
        $setting->brand_name = $request->brand_name;

        // Save the updated setting
        $setting->save();

        return redirect()->route('setting.index')->with('success', 'Settings updated successfully.');
    }
}
