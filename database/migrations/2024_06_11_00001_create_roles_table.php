<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->timestamps();
        });
        DB::table('roles')->insert([
            ['id' => 1 , 'label' =>"Collaborateur"],
            ['id' => 2 , 'label' =>"Teacher"],
            ['id' => 3 , 'label' =>"student"],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
