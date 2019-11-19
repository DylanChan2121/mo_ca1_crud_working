<?php
# @Date:   2019-11-18T19:11:20+00:00
# @Last modified time: 2019-11-18T19:29:37+00:00




use Illuminate\Database\Seeder;
use App\Role;
use App\Doctor;
class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $role_doctor = Role::where('name','doctor')->first();

          foreach ($role_doctor->users as $user){
              $doctor = new Doctor();
              $doctor->starting_date = "01/01/10";
              $doctor->user_id = $user->id;
              $doctor->save();
            }
        }

        private function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')

            {

            $pieces = [];

            $max = mb_strlen($keyspace, '8bit') - 1; for ($i = 0; $i < $length; ++$i) {

            $pieces []= $keyspace[random_int(0, $max)]; }

            return implode('', $pieces); }


}
