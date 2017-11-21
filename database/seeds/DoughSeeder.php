<?php

use Illuminate\Database\Seeder;

class DoughSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stuffedCrust = false;

        $doughName = 'Thin & Crispy';
        factory('App\Models\Dough')->create([
            'dough_name' => $doughName
            , 'dough_base_size_inches' => 10
            , 'dough_extra_price' => 0.00
            , 'dough_stuffed_crust' => $stuffedCrust
        ]);
        factory('App\Models\Dough')->create([
            'dough_name' => $doughName
            , 'dough_base_size_inches' => 12
            , 'dough_extra_price' => 1.00
            , 'dough_stuffed_crust' => $stuffedCrust
        ]);
        factory('App\Models\Dough')->create([
            'dough_name' => $doughName
            , 'dough_base_size_inches' => 16
            , 'dough_extra_price' => 2.00
            , 'dough_stuffed_crust' => $stuffedCrust
        ]);

        $doughName = 'Stonebaked';
        factory('App\Models\Dough')->create([
            'dough_name' => $doughName
            , 'dough_base_size_inches' => 10
            , 'dough_extra_price' => 1.00
            , 'dough_stuffed_crust' => $stuffedCrust
        ]);
        factory('App\Models\Dough')->create([
            'dough_name' => $doughName
            , 'dough_base_size_inches' => 12
            , 'dough_extra_price' => 2.00
            , 'dough_stuffed_crust' => $stuffedCrust
        ]);
        factory('App\Models\Dough')->create([
            'dough_name' => $doughName
            , 'dough_base_size_inches' => 16
            , 'dough_extra_price' => 3.00
            , 'dough_stuffed_crust' => $stuffedCrust
        ]);

        $stuffedCrust = true;
        $doughName = 'Dominator';
        factory('App\Models\Dough')->create([
            'dough_name' => $doughName
            , 'dough_base_size_inches' => 10
            , 'dough_extra_price' => 2.00
            , 'dough_stuffed_crust' => $stuffedCrust
        ]);
        factory('App\Models\Dough')->create([
            'dough_name' => $doughName
            , 'dough_base_size_inches' => 12
            , 'dough_extra_price' => 3.00
            , 'dough_stuffed_crust' => $stuffedCrust
        ]);
        factory('App\Models\Dough')->create([
            'dough_name' => $doughName
            , 'dough_base_size_inches' => 16
            , 'dough_extra_price' => 4.00
            , 'dough_stuffed_crust' => $stuffedCrust
        ]);
    }
}