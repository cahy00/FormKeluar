<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Unit;
use App\Models\User;
use App\Models\Position;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

				Position::create([
					'position_name' => 'Pengelola Data'
				]);

				Unit::create([
					'unit_name' => 'Bidang Informasi Kepegawaian'
				]);

				User::create([
					'position_id' => 1,
					'unit_id' => 1,
					'name' => 'Sulistyo Cahyo Gumilang',
					'nip' => '199806162022031006', 
					'role' => 'admin',
					'email' => 'cgumilang48@gmail.com',
					'email_verified_at' => now(),
					'password' => bcrypt('12345678'),
					'remember_token' => Str::random(10)
				]);

				// $this->call(UserSeeder::class);
				// $this->call(UnitSeeder::class);
				// $this->call(FormExitSeeder::class);
				// $this->call(RegisterPinSeeder::class);
    }
}
