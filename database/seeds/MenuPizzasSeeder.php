<?php

use Illuminate\Database\Seeder;

class MenuPizzasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = DB::table('menus')->where('menu_name', 'Mains')->first();
        $pizza = DB::table('pizzas')->where('pizza_name', 'Ham & Cheese')->first();
        factory('App\Models\MenuPizzas')->create([
           'menu_id' => $menu->id
           , 'pizza_id' => $pizza->id
        ]);
        $pizza = DB::table('pizzas')->where('pizza_name', 'Bacon & Maple Syrup')->first();
        factory('App\Models\MenuPizzas')->create([
            'menu_id' => $menu->id
            , 'pizza_id' => $pizza->id
        ]);
        $pizza = DB::table('pizzas')->where('pizza_name', 'Baked Beans & Sausage')->first();
        factory('App\Models\MenuPizzas')->create([
            'menu_id' => $menu->id
            , 'pizza_id' => $pizza->id
        ]);
        $pizza = DB::table('pizzas')->where('pizza_name', 'Veggies')->first();
        factory('App\Models\MenuPizzas')->create([
            'menu_id' => $menu->id
            , 'pizza_id' => $pizza->id
        ]);

    }
}