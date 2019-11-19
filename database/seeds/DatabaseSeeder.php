<?php
# @Date:   2019-11-08T17:38:21+00:00
# @Last modified time: 2019-11-18T19:16:42+00:00




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
         $this->call(RolesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(PatientsTableSeeder::class);
         $this->call(DoctorsTableSeeder::class);
    }
}
