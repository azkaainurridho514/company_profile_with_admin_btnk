<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->id();
            $table->string("greating_home_1");
            $table->string("greating_home_2");
            $table->string("greating_home_3");
            $table->string("visi");
            $table->string("misi");
            $table->string("desc_our_menu");
            $table->string("desc_our_menu_home");
            $table->string("desc_event");
            $table->string("desc_event_home");
            $table->string("kedai_senin_jumat");
            $table->string("kedai_sabtu");
            $table->string("kedai_minggu");
            $table->string("wahana_senin_jumat");
            $table->string("wahana_sabtu");
            $table->string("wahana_minggu");
            $table->string("title_footer");
            $table->string("desc");
            $table->string("link_instagram");
            $table->string("link_facebook");
            $table->string("link_youtube");
            $table->string("alamat");
            $table->string("whatsapp");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masters');
    }
};
