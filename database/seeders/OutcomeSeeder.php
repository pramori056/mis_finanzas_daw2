<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OutcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Rent', 'Leisure', 'Shopping', 'Transport', 'Other'];
        $amounts = [100, 200, 300, 400, 500];
        
        DB::table('outcomes')->insert([
            'Date' => now()->toDateString(),
            'Category' => $categories[array_rand($categories)],
            'Amount' => $amounts[array_rand($amounts)],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
