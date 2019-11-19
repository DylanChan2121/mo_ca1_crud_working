<?php
# @Date:   2019-11-08T17:38:21+00:00
# @Last modified time: 2019-11-18T17:42:13+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
          //  $table->bigIncrements('doctor_id');//maybe
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('postal_address');
            $table->string('password');
            //put in other stuff look up customer vid
            $table->rememberToken();
            $table->timestamps();
          //  $table->foreign('doctor_id')->references('id')->on('doctors');//maybe
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
