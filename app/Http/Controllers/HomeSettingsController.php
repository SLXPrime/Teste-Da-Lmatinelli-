<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Setting;

class HomeSettingsController extends Controller
{
    public function index()
    {
        // Buscar configurações específicas para a home
        $settings = Setting::where('group', 'Home')->get();

        return view('voyager::home-settings', compact('settings'));
    }

    public function update(Request $request)
    {
        foreach ($request->except('_token') as $key => $value) {
            Setting::where('key', $key)->update(['value' => $value]);
        }

        return redirect()->back()->with(['message' => 'Configurações atualizadas!', 'alert-type' => 'success']);
    }
}
