<?php
# @Date:   2019-11-08T18:29:55+00:00
# @Last modified time: 2019-11-18T19:16:06+00:00




use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An Administrator user';
        $role_admin->save();

        $role_doctor = new Role();
        $role_doctor->name = 'doctor';
        $role_doctor->description = 'An doctor admininistrator user';
        $role_doctor->save();

        $role_user = new Role();
        $role_user->name = 'patient';
        $role_user->description = 'An Patient user';
        $role_user->save();
    }


}
