<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 08/11/17
 * Time: 19:46
 */

namespace App\Repositories;

use App\Repositories\Contracts\MenuPizzasRepositoryContract;
use Illuminate\Http\Request;
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
        $this->menu = $this->getById($id);
        $this->menu->update($request->all());
    }

    public function destroy($ids)
    {
        Menu::destroy($ids);
    }

}