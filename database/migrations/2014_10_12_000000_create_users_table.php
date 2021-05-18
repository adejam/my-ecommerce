<?php

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
            $table->id();
            $table->string('firstname', 255);
            $table->string('lastname', 255);
            $table->string('username', 255);
            $table->char('phone', 25)->nullable();
            $table->string('country', 255);
            $table->string('state', 255);
            $table->string('area', 255);
            $table->char('reference_address', 255)->nullable();
            $table->enum('status', ['offline','online'])->default('offline');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->char('admin_id', 100)->unique()->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('card_type')->nullable();
            $table->string('card_id_number')->nullable();
            $table->string('card_image')->nullable();
            $table->boolean('agent_verification')->nullable();
            $table->timestamp('agent_vef_date')->nullable();
            $table->timestamps();
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
