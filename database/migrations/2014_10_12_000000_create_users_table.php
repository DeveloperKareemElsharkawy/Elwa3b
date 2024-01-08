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
            $table->string('name');
            $table->string('email')->unique();
            $table->tinyInteger('status')->default(1);
            $table->string('mobile')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image')->nullable();

            $table->foreignId('state_id')->nullable()->constrained("states")->cascadeOnUpdate()->nullOnDelete();
            $table->string('zone')->nullable();
            $table->string('street')->nullable();

            $table->string('provider')->nullable();
            $table->string('social_id')->nullable();

            $table->string('password')->nullable();
            $table->rememberToken();
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
