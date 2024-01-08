<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->integer('age');
            $table->integer('experience');
            $table->enum('gender', ['male', 'female']);
            $table->enum('marital_status', ['single', 'divorced', 'married']);
            $table->tinyInteger('status')->default(1);
            $table->string('no_of_children');
            $table->enum('religion', ['muslim', 'christian', 'buddhist', 'hindu', 'other']);
            $table->foreignId('nationality_id')->nullable()->constrained("nationalities")->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained("categories")->cascadeOnUpdate()->nullOnDelete();
            $table->string('place_of_birth');
            $table->string('living_town');
            $table->string('passport_number');
            $table->string('release_date');
            $table->string('expiry_date');
            $table->string('place_of_issue');
            $table->string('scientific_degree');
            $table->text('languages');
            $table->string('height');
            $table->string('weight');
            $table->string('skin_colour');
            $table->string('salary');
            $table->string('contract_full');
            $table->string('face_image');
            $table->string('worker_image');


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
        Schema::dropIfExists('workers');
    }
};
