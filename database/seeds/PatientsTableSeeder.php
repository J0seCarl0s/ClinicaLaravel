<?php

use Illuminate\Database\Seeder;
use App\Patient;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->delete();
        Patient::create([
            'name'		=>	'Alambrito',
            'lastName'	=>	'Delgado',
            'birthdate'	=>	'01/10/2005',
            'phone'		=>	'123456789',
            'address'	=>	'Av siempreviva 123',
            'email'		=>	'soy_email@example.com',
            'password'	=>	'password',
            'genero'	=>	0
        ]);
    }
}
