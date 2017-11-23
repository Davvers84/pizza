<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $timestamps = false;
    public $table = 'menus';
    protected $guarded = [];

    public function getAll() {
        return Menu::with('pizzas.pizza')->get();
    }

    public function getById($id) {
        return Menu::find($id);
    }

    public function pizzas() {
        return $this->hasMany('App\Models\MenuPizzas', 'menu_id');
    }

}
