<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ===========================
        // MASTER
        // ===========================
        DB::table('masters')->insert([
            'foto_header' => '-',
            'greating_home_1' => 'Selamat datang',
            'greating_home_2' => 'Menikmati Setiap Tegukan Mengabadikan Setiap Sudut',
            'greating_home_3' => 'Lebih dari sekadar kopi, sebuah destinasi. Tempat citarasa berpadu dengan keriaan dan inspirasi. Ciptakan ceritamu di rooftop dan spot foto unik kami',
            'visi' => 'Menjadi tempat terbaik bagi pecinta kopi dan ruang bertemu yang menginspirasi kreativitas, kebersamaan, dan kebaikan.',
            'misi' => 'Menyajikan kopi berkualitas tinggi dari petani lokal, Menciptakan lingkungan ramah dan nyaman untuk semua, Mengadakan event komunitas untuk karya dan kolaborasi.',
            'desc_our_menu' => 'Pilih kategori favoritmu dan temukan rasa terbaik dari Botanika Coffee.',
            'desc_our_menu_home' => 'Nikmati berbagai menu menarik yang kami selenggarakan di BOTANIKA Coffee setiap minggunya!',
            'desc_event' => 'Temukan beragam acara menarik yang siap memeriahkan hari-harimu! Dari live music, pameran seni, workshop seru, hingga event spesial lainnya, semuanya bisa kamu nikmati di sini.',
            'desc_event_home' => 'Nikmati berbagai kegiatan menarik yang kami selenggarakan di BOTANIKA Coffee setiap minggunya!',
            'kedai_senin_jumat' => '10.00 - 21.00',
            'kedai_sabtu' => '10.00 - 22.00',
            'kedai_minggu' => '06.00 - 21.00',
            'wahana_senin_jumat' => '10.00 - 21.00',
            'wahana_sabtu' => '10.00 - 22.00',
            'wahana_minggu' => '06.00 - 21.00',
            'title_footer' => 'Botanika',
            'desc' => 'View • Coffee • Food',
            'link_instagram' => '',
            'link_facebook' => '',
            'link_youtube' => '',
            'alamat' => 'Alamat: Jl. Boenoet Lembur Kuring, Puncak, Kec. Cigugur, Kabupaten Kuningan, Jawa Barat 45552',
            'whatsapp' => '+62 813-2492-6596',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // ===========================
        // CATEGORIES
        // ===========================
        $categories = [
            ['name' => 'Coffee', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Non Coffee', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Food', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Snack', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dessert', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('categories')->insert($categories);


        // ===========================
        // MENUS 
        // ===========================
        $menus = [];
        $trueIndexes = collect(range(1, 50))->shuffle()->take(4)->toArray();
        for ($i = 1; $i <= 50; $i++) {
            $menus[] = [
                'category_id' => rand(1, 5),
                'name' => "Menu $i",
                'desc' => "Deskripsi menu ke-$i",
                'path' => "storage/menu/menu_$i.jpg",
                'is_best' => in_array($i, $trueIndexes),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('menus')->insert($menus);



        // ===========================
        // EVENTS 
        // ===========================
        $events = [];
        for ($i = 1; $i <= 20; $i++) {
            $events[] = [
                'name' => "Event $i",
                'desc' => "Deskripsi event ke-$i",
                'photo' => "storage/event/event_$i.jpg",
                'date' => Carbon::now()->addDays($i),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('events')->insert($events);
    }
}
