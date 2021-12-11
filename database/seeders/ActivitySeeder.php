<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            'title' => "Running",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'date_init' => "2021-12-01",
            'date_final' => "2021-12-31",
            'price_adult' => 59.99,
            'price_child' => 39.99,
            'ranking' => "9.5",
            'id_categoria' => 1,
        ]);
        DB::table('activities')->insert([
            'title' => "Montañismo",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'date_init' => "2021-12-01",
            'date_final' => "2021-12-31",
            'price_adult' => 69.99,
            'price_child' => 49.99,
            'ranking' => "9.0",
            'id_categoria' => 1,
        ]);
        DB::table('activities')->insert([
            'title' => "Kayak",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'date_init' => "2021-12-01",
            'date_final' => "2021-12-31",
            'price_adult' => 49.99,
            'price_child' => 19.99,
            'ranking' => "9.1",
            'id_categoria' => 1,
        ]);
        DB::table('activities')->insert([
            'title' => "Ciclismo",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'date_init' => "2021-12-01",
            'date_final' => "2021-12-31",
            'price_adult' => 79.99,
            'price_child' => 59.99,
            'ranking' => "9.2",
            'id_categoria' => 1,
        ]);
        DB::table('activities')->insert([
            'title' => "Surf",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'date_init' => "2021-12-01",
            'date_final' => "2021-12-15",
            'price_adult' => 69.99,
            'price_child' => 49.99,
            'ranking' => "9.3",
            'id_categoria' => 1,
        ]);
        DB::table('activities')->insert([
            'title' => "Carreras de coches",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'date_init' => "2021-12-01",
            'date_final' => "2021-12-15",
            'price_adult' => 69.99,
            'price_child' => 49.99,
            'ranking' => "9.5",
            'id_categoria' => 1,
        ]);
        DB::table('activities')->insert([
            'title' => "Senderismo",
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
            'date_init' => "2021-12-01",
            'date_final' => "2021-12-15",
            'price_adult' => 69.99,
            'price_child' => 49.99,
            'ranking' => "9.5",
            'id_categoria' => 1,
        ]);
    }
}
