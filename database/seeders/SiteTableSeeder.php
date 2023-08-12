<?php

namespace Database\Seeders;

use App\Models\Site\Site;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Site::truncate();

        Site::create([
            'name'              => 'Seundang Website',
            'description'       => 'Pembuatan undangan online',
            'about'             => 'Pembuatan undangan online',
            'site_keywords'     => 'Pembuatan undangan online',
            'logo'              => null,
            'address'           => 'Jl. Bungur No. ABC Surabaya, Jawa Timur, Indonesia',
            'phone'             => '08123456789',
            'whatsapp'          => '08123456789',
            'email'             => 'developerseundang.com',
            'facebook_link'     => null,
            'instagram_link'    => null,
            'twitter_link'      => null,
            'youtube_link'      => null,
            'playstore_link'    => null,
            'appstore_link'     => null,
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
