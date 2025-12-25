<?php

namespace Database\Seeders;

use App\Enums\CategoryType;
use App\Models\User;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            $expenseCategories = [
                'Food',
                'Transport',
                'Rent',
                'Utilities',
                'Internet',
                'Entertainment',
                'Health',
        ];

            foreach ($expenseCategories as $name) {
                $user->categories()->firstOrCreate([
                    'name' => $name,
                    'type' => CategoryType::EXPENSE
                ]);
            }

            $incomeCategories = [
                'Salary',
                'Freelance',
                'Business',
                'Bonus',
                'Investment',
            ];

            foreach ($incomeCategories as $name) {
                $user->categories()->firstOrCreate([
                    'name' => $name,
                    'type' => CategoryType::INCOME
                ]);
            }
        }
    }
}
