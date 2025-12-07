<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;

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

        $master->update($data);

        return back()->with('success', 'Master berhasil diperbarui!');
    }
}
