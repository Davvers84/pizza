<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 08/11/17
 * Time: 19:50
 */

namespace App\Repositories;

use App\Repositories\Contracts\MenuPizzasRepositoryContract;
use App\Models\MenuPizzas;

class MenuPizzasRepository implements MenuPizzasRepositoryContract
{

    protected $menu_pizzas;

    public function __construct()
    {
        $this->menu_pizzas = new MenuPizzas();
    }

    public function getAll() {
        return $this->menu_pizzas->getAll();
    }

    public function getById($id)
    {
        return $this->menu_pizzas->getById($id);
    }

    public function update($id, Request $request)
    {
        return $this->menu_pizzas->update($id, $request);
    }

    public function destroy($ids)
    {
        MenuPizzas::destroy($ids);
    }

}