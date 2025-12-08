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
            'foto_header' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'greating_home_1' => 'required|string',
            'greating_home_2' => 'required|string',
            'greating_home_3' => 'required|string',

            'kedai_senin_jumat' => 'required|string',
            'kedai_sabtu'       => 'required|string',
            'kedai_minggu'      => 'required|string',

            'wahana_senin_jumat' => 'required|string',
            'wahana_sabtu'        => 'required|string',
            'wahana_minggu'       => 'required|string',

            'desc_our_menu_home' => 'required|string',
            'desc_event_home'    => 'required|string',

            'visi' => 'required|string',
            'misi' => 'required|string',

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


        $master->update($data);

        return redirect()->route('dashboard')->with('success', 'Master berhasil diperbarui!');

    }
}
