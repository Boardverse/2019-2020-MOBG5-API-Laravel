<?php

    use App\User;
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
            $table->bigIncrements('user_id');
            $table->string('user_name');
            $table->string('user_icon_url');
            $table->string('user_email')->unique();
            $table->string('user_password');
            $table->bigInteger('joined_timestamp');
            $table->string('token');
        });

        $time = time() * 1000;
        User::create([
            'user_name' => 'test',
            'user_icon_url' => 'https://lorempixel.com/640/480/?66344',
            'user_email' => 'test@boardverse.ascor.ml',
            'joined_timestamp' => $time,
            'user_password' => hash('sha256', 'test' . $time),
            'token' => bin2hex(random_bytes(32)),
        ]);
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
