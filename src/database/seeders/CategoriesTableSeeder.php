<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = ['商品のお届けについて','商品の交換について','商品トラブル','ショップへのお問い合わせ','その他'];
        foreach($categories as $category){
        $c = new Category;
        $c->name = $category;
        $c->save();
    }
    public function run()
    {
        $role = config('constants.default_user_role');
        Categories::create(['商品のお届けについて','商品の交換について','商品トラブル','ショップへのお問い合わせ','その他']);
    }
}
