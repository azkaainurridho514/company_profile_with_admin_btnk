<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index(){
        $master = Master::first();
        return view("dashboard", compact('master'));
    }
    public function update(Request $request)
    {
        $master = Master::firstOrFail();

        $data = $request->validate([
            'foto_header' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            'greating_home_1' => 'required|string',
            'greating_home_2' => 'required|string',
            'greating_home_3' => 'required|string',
            'kedai_senin'   => 'nullable|string',
            'kedai_selasa'  => 'nullable|string',
            'kedai_rabu'    => 'nullable|string',
            'kedai_kamis'   => 'nullable|string',
            'kedai_jumat'   => 'nullable|string',
            'kedai_sabtu'   => 'nullable|string',
            'kedai_minggu'  => 'nullable|string',
            'wahana_senin'   => 'nullable|string',
            'wahana_selasa'  => 'nullable|string',
            'wahana_rabu'    => 'nullable|string',
            'wahana_kamis'   => 'nullable|string',
            'wahana_jumat'   => 'nullable|string',
            'wahana_sabtu'   => 'nullable|string',
            'wahana_minggu'  => 'nullable|string',
            'desc_our_menu_home' => 'required|string',
            'desc_event_home'    => 'required|string',
            'foto_sejarah' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            'sejarah' => 'required|string',
            'visi' => 'required|string',
            'misi' => 'required|string',
            'desc_facilities' => 'required|string',
            'title_footer'  => 'required|string',
            'desc'          => 'required|string',
            'link_instagram' => 'required|string',
            'link_facebook'  => 'required|string',
            'link_youtube'   => 'required|string',
            'alamat'   => 'required|string',
            'whatsapp' => 'required|string',
            'desc_our_menu' => 'required|string',
            'desc_event'    => 'required|string',
        ]);

        if ($request->hasFile('foto_header')) {
            if ($master->foto_header && Storage::disk('public')->exists($master->foto_header)) {
                Storage::disk('public')->delete($master->foto_header);
            }
            $filePath = $request->file('foto_header')->store('home', 'public');
            $data['foto_header'] = $filePath;
        }

        if ($request->hasFile('foto_sejarah')) {
            if ($master->foto_sejarah && Storage::disk('public')->exists($master->foto_sejarah)) {
                Storage::disk('public')->delete($master->foto_sejarah);
            }
            $filePath = $request->file('foto_sejarah')->store('home', 'public');
            $data['foto_sejarah'] = $filePath;
        }


        $master->update($data);

        return redirect()->route('dashboard')->with('success', 'Master berhasil diperbarui!');

    }
}
