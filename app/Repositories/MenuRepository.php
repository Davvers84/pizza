<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 08/11/17
 * Time: 19:46
 */

namespace App\Repositories;

use App\Repositories\Contracts\MenuPizzasRepositoryContract;
use App\Repositories\Contracts\Request;
use App\Models\Menu;

class MenuRepository implements MenuPizzasRepositoryContract
{

    protected $menu;

    public function __construct()
    {
        $this->menu = new Menu();
    }

    public function getAll() {
        return $this->menu->getAll();
    }

    public function getById($id)
    {
        return $this->menu->getById($id);
    }

    public function update($id, Request $request)
    {
        return $this->menu->update($id, $request);
    }

    public function destroy($ids)
    {
        Menu::destroy($ids);
    }

}