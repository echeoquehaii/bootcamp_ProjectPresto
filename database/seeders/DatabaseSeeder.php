<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categories = [
            ['name'=>'Supernova', 'it'=>'Supernova', 'en'=>'Supernova', 'es'=>'Supernova', 'no'=>'Supernova'],
            ['name'=>'Nana bianca', 'it'=>'Nana bianca', 'en'=>'White dwarf', 'es'=>'Enana blanca', 'no'=>'Hvit dverg'],
            ['name'=>'Nana nera', 'it'=>'Nana nera', 'en'=>'Black dwarf', 'es'=>'Enana negra', 'no'=>'Svart dverg'],
            ['name'=>'Buco nero', 'it'=>'Buco nero', 'en'=>'Black Hole', 'es'=>'Agujero Negro', 'no'=>'Svart hull'],
            ['name'=>'Supergigante', 'it'=>'Supergigante', 'en'=>'Supegiant', 'es'=>'Supergigante', 'no'=>'Superkjempe'],
            ['name'=>'Nova', 'it'=>'Nova', 'en'=>'Nova', 'es'=>'Nova', 'no'=>'Nova'],
            ['name'=>'Gigante Rossa', 'it'=>'Gigante Rossa', 'en'=>'Red Giant', 'es'=>'Gigante Roja', 'no'=>'Rød kjempe'],
        ];

        foreach ($categories as $category){
            DB::table('categories')->insert(
                [
                    'name'=>$category['name'],
                    'it'=>$category['it'],
                    'en'=>$category['en'],
                    'es'=>$category['es'],
                    'no'=>$category['no'],
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ]
                );
        }
    }
}
