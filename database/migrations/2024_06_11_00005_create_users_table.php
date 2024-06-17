<?php

use App\Models\Level;
use App\Models\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('profil')->default('default.svg')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->ForeignIdFor(Role::class)->default(3)->constrained()->cascadeOnDelete();
            $table->ForeignIdFor(Level::class)->nullable()->constrained()->cascadeOnDelete();
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            ['firstname' => 'Doe ', 'lastname' => 'John' , 'email' => 'johdoe@example.com' , 'phone' => '12345748','password' => Hash::make('admin007'),'role_id' => 1]
        ]) ;
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
