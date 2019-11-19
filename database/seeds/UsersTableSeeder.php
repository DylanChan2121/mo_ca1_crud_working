<?php
# @Date:   2019-11-08T18:29:11+00:00
# @Last modified time: 2019-11-18T19:33:08+00:00




use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_admin = Role::where('name','admin')->first();
      $role_doctor = Role::where('name','doctor')->first();
      $role_user = Role::where('name','patient')->first();

      $admin = new User();
      $admin->name = 'Elon musk';
      $admin->email = 'elon@admin.ie';
      $admin->postal_address = '402 new york';
      $admin->phone_number = '0874578900';
      $admin->password = bcrypt('secret');
      $admin->save();
      $admin->roles()->attach($role_admin);

      $doctor = new User();//if you get a later error it mite be because of this you changed user to doctor
      $doctor->name = 'Doctor mike';
      $doctor->email = 'mike@doctor.ie';
      $doctor->postal_address = '407 new york';
      $doctor->phone_number = '0874578900';
      $doctor->password = bcrypt('secret');
      $doctor->save();
      $doctor->roles()->attach($role_doctor);

      $doctor = new User();//if you get a later error it mite be because of this you changed user to doctor
      $doctor->name = 'Doctor Rory';
      $doctor->email = 'rory@doctor.ie';
      $doctor->postal_address = '407 new york';
      $doctor->phone_number = '0874578900';
      $doctor->password = bcrypt('secret');
      $doctor->save();
      $doctor->roles()->attach($role_doctor);

      $user = new User();
      $user->name = 'alex';
      $user->email = 'alex@user.ie';
      $user->postal_address = '405 new york';
      $user->phone_number = '0874578900';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);


      $user = new User();
      $user->name = 'nicole';
      $user->email = 'nicole@user.ie';
      $user->postal_address = '404 new york';
      $user->phone_number = '0874578900';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);


      $user = new User();
      $user->name = 'taylor';
      $user->postal_address = '401 new york';
      $user->email = 'taylor@user.ie';
      $user->phone_number = '0874578900';
      $user->password = bcrypt('secret');
      $user->save();
      $user->roles()->attach($role_user);
    }
}
