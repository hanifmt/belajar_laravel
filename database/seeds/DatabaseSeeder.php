<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PegawaiSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(PenggunaSeeder::class);
        $this->call(TeleponSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(AnggotaSeeder::class);
        $this->call(HadiahSeeder::class);
        $this->call(AnggotaHadiahSeeder::class);
    }
}
