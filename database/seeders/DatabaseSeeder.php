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
            ['name'=>'Supernova'],
            ['name'=>'Nana bianca'],
            ['name'=>'Nana nera'],
            ['name'=>'Buco nero'],
            ['name'=>'Super gigante'],
            ['name'=>'Nova'],
            ['name'=>'Gigante Rossa'],
        ];

        foreach ($categories as $category){
            DB::table('categories')->insert(
                [
                    'name'=>$category['name'],
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ]
                );
        }
    }
}
