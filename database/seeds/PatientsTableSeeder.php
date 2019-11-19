<?php
# @Date:   2019-11-18T17:00:05+00:00
# @Last modified time: 2019-11-18T19:27:40+00:00




use Illuminate\Database\Seeder;
use App\Role;
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
        $role_user = Role::where('name','patient')->first();

     foreach ($role_user->users as $user){
     $patient = new Patient();
     $patient->insurance = "susi life insurance";
     $patient->policy_num = "5";
     $patient->user_id = $user->id;
     $patient->save();
        }
    }

    private function random_str($length, $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')

        {

        $pieces = [];

        $max = mb_strlen($keyspace, '8bit') - 1; for ($i = 0; $i < $length; ++$i) {

        $pieces []= $keyspace[random_int(0, $max)]; }

        return implode('', $pieces); }
    }
