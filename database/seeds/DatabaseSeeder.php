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
        $this->call(Keywords::class);
        $this->call(Profiles::class);
        $this->call(Users::class);
        $this->call(Specialties::class);
    }
}
