<?php

use Illuminate\Database\Seeder;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $doughName = 'Thin & Crispy';
        $dough = DB::table('dough')
            ->where('dough_name', $doughName)
            ->where('dough_base_size_inches', 10)->first();
        $price = 5.99;
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Ham & Cheese'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Bacon & Maple Syrup'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Baked Beans & Sausage'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Veggies'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);

        $dough = DB::table('dough')
            ->where('dough_name', $doughName)
            ->where('dough_base_size_inches', 12)->first();
        $price = 7.99;
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Ham & Cheese'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Bacon & Maple Syrup'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Baked Beans & Sausage'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Veggies'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);

        $dough = DB::table('dough')
            ->where('dough_name', $doughName)
            ->where('dough_base_size_inches', 16)->first();
        $price = 9.99;
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Ham & Cheese'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Bacon & Maple Syrup'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Baked Beans & Sausage'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Veggies'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);

        $doughName = 'Stonebaked';
        $dough = DB::table('dough')
            ->where('dough_name', $doughName)
            ->where('dough_base_size_inches', 10)->first();
        $price = 6.99;
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Ham & Cheese'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Bacon & Maple Syrup'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Baked Beans & Sausage'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Veggies'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);

        $dough = DB::table('dough')
            ->where('dough_name', $doughName)
            ->where('dough_base_size_inches', 12)->first();
        $price = 8.99;
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Ham & Cheese'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Bacon & Maple Syrup'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Baked Beans & Sausage'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Veggies'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);

        $dough = DB::table('dough')
            ->where('dough_name', $doughName)
            ->where('dough_base_size_inches', 16)->first();
        $price = 10.99;
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Ham & Cheese'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Bacon & Maple Syrup'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Baked Beans & Sausage'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Veggies'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);

        $doughName = 'Dominator';
        $dough = DB::table('dough')
            ->where('dough_name', $doughName)
            ->where('dough_base_size_inches', 10)->first();
        $price = 7.99;
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Ham & Cheese'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Bacon & Maple Syrup'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Baked Beans & Sausage'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Veggies'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);

        $dough = DB::table('dough')
            ->where('dough_name', $doughName)
            ->where('dough_base_size_inches', 12)->first();
        $price = 9.99;
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Ham & Cheese'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Bacon & Maple Syrup'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Baked Beans & Sausage'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Veggies'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);

        $dough = DB::table('dough')
            ->where('dough_name', $doughName)
            ->where('dough_base_size_inches', 16)->first();
        $price = 11.99;
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Ham & Cheese'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Bacon & Maple Syrup'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Baked Beans & Sausage'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
        factory('App\Models\Pizza')->create([
            'pizza_name' => 'Veggies'
            , 'pizza_base_price' => $price
            , 'dough_id' => $dough->id
        ]);
    }
}