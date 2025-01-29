<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Salary', 'Donation', 'Investment', 'Freelance', 'Other'];
        $amounts = [1000, 2000, 3000, 4000, 5000];
        
        DB::table('incomes')->insert([
            'Date' => now()->toDateString(),
            'Category' => $categories[array_rand($categories)],
            'Amount' => $amounts[array_rand($amounts)],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
