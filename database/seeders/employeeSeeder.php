<?php

namespace Database\Seeders;

// use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\carbon

class employeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([

            'name' => Str::random(10),
            'age'=> Carbon::parse('2000-01-01'),
            'email' => Str::random(10).'@example.com',
            'address' => Str::random(20),
            'phone_number' => Str::random(12),



        ]);
    }
}
