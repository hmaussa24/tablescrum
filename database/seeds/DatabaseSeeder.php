<?php

use App\Rol;
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
        // $this->call(UserSeeder::class);
        DB::table('rols')->delete();

        Rol::create(['name' => 'Scrum Master']);
        Rol::create(['name' => 'Product Owner']);
        Rol::create(['name' => 'Development']);
    }
}
