<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('doughs')->truncate();
        DB::table('pizzas')->truncate();
        DB::table('menus')->truncate();
        DB::table('menu_pizzas')->truncate();

        $this->call(DoughSeeder::class);
        $this->call(PizzaSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(MenuPizzasSeeder::class);
    }
}
