<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhonneAvatarToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->default('placeholder.png')->after('email_verified_at');
            $table->string('mobile',15)->unique()->after('name');
            $table->float('latitude', 10, 6)->nullable()->after('password');
            $table->float('longitude', 10, 6)->nullable()->after('password');
            $table->boolean('status')->default(0)->after('password');
            $table->date('dob')->nullable()->after('password');
            $table->enum('gender', ['male', 'female','na'])->default('na')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['avatar', 'mobile', 'status', 'gender', 'dob','latitude','longitude']);
        });
    }
}
