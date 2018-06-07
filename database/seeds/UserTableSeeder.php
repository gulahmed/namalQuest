<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_applicant  = Role::where('name', 'applicant')->first();

        $reviewer = new User();
        $reviewer->name = 'Admin';
        $reviewer->email = 'admin@test.com';
        $reviewer->password = bcrypt('123456');
        $reviewer->save();
        $reviewer->roles()->attach($role_admin);
    
        $applicant = new User();
        $applicant->name = 'Gul';
        $applicant->email = 'gul@test.com';
        $applicant->password = bcrypt('123456');
        $applicant->save();
        $applicant->roles()->attach($role_applicant);

        $applicant = new User();
        $applicant->name = 'aftab';
        $applicant->email = 'aftab@test.com';
        $applicant->password = bcrypt('123456');
        $applicant->save();
        $applicant->roles()->attach($role_applicant);
    }
}
