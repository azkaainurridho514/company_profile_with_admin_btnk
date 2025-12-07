<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master extends Model
{
    use HasFactory;
    protected $fillable = [
        'greating_home_1',
        'greating_home_2',
        'greating_home_3',
        'visi',
        'misi',
        'desc_our_menu',
        'desc_our_menu_home',
        'desc_event',
        'desc_event_home',
        'kedai_senin_jumat',
        'kedai_sabtu',
        'kedai_minggu',
        'wahana_senin_jumat',
        'wahana_sabtu',
        'wahana_minggu',
        'title_footer',
        'desc',
        'link_instagram',
        'link_facebook',
        'link_youtube',
        'alamat',
        'whatsapp'
    ];
}
