<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [   
                'name' => 'System Admin',
                'email' => 'admin@my-project.com',
                'password' => Hash::make('Qwerty1'),
                'type' => 'Admin',
                'Phone' => '0754761253',
                'location' => 'Nairobi',
            ],
            [   
                'name' => 'John Doe',
                'email' => 'john@my-project.com',
                'password' => Hash::make('Qwerty2'),
                'type' => 'Employee',
                'Phone' => '0723661144',
                'location' => 'Karen',
            ],
            [   
                'name' => 'Stephan Bernuli',
                'email' => 'stephan@my-project.com',
                'password' => Hash::make('Qwerty3'),
                'type' => 'Employee',
                'Phone' => '0754761253',
                'location' => 'Nairobi',
            ],
        ];
        $users2 = [
            [   
                'name' => 'Admin2',
                'email' => 'Admin2@my-project.com',
                'password' => 'Qwerty3',
                'type' => 'admin',
                'Phone' => '0729583205',
                'location' => 'Mombasa',
            ],

        ];
        $categories = [
            ['Category' => 'sandWitches'],
            ['Category' => 'Juices'],
        ];

        // DB::table("categories")->insert($categories);
        DB::table("users")->delete(4);
        // DB::table("users")->insert($users2);
    }
}

                // User::factory(10)->create();
        
                // User::factory()->create([
                //     'name' => 'System Admin',
                //     'email' => 'admin@my-project.com',
                //     'password' => 'SupperSafe',
                //     'type' => 'Admin',
                //     'Phone' => '0754761253',
                //     'location' => 'Nairobi',
                
                // ]);