<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::truncate();
        Product::truncate();
        Category::truncate();
        
        $user = User::create([
            'name' => 'one',
            'email' => 'one@one.com',
            'password' => Hash::make('one1349')
        ]);
        
        
        $categoryOne = Category::create([
            'title' => 'Apples',
            'url' => 'apples',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries'
        ]);
        
        $categoryTwo = Category::create([
            'title' => 'Bananas',
            'url' => 'bananas',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries'
        ]);
        
        $categoryThree = Category::create([
            'title' => 'Limes',
            'url' => 'limes',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries'
        ]);
        
        
        
        Product::factory(10)->create([
            'user_id' => $user->id,
            'category_id' => $categoryOne->id
        ]);
        
        Product::factory(10)->create([
            'user_id' => $user->id,
            'category_id' => $categoryTwo->id
        ]);
        
        Product::factory(10)->create([
            'user_id' => $user->id,
            'category_id' => $categoryThree->id
        ]);
    }
}
