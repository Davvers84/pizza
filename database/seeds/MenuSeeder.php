<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Menu')->create([
            'menu_name' => 'Mains'
        ]);
        factory('App\Models\Menu')->create([
            'menu_name' => 'Sides'
        ]);
        factory('App\Models\Menu')->create([
            'menu_name' => 'Deserts'
        ]);

    }
}
