<?php

use Illuminate\Database\Seeder;

class HadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hadiah')->insert([
            ['nama_hadiah' => 'Television',],
            ['nama_hadiah' => 'Kulkas',],
            ['nama_hadiah' => 'Blender',],
            ['nama_hadiah' => 'Magicom',],
            ['nama_hadiah' => 'Oven',],
            ['nama_hadiah' => 'Sepeda',],
            ['nama_hadiah' => 'Lemari',],
            ['nama_hadiah' => 'Motor',],
            ['nama_hadiah' => 'Mobil',],
            ['nama_hadiah' => 'Laptop',],
        ]);
        
    }
}
