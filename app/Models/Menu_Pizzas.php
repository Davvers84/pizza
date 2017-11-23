<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use App\Models\Menu;

class MenuPizzas extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function getAll() {
        return MenuPizzas::with('menu', 'pizza')->get();
    }

    public function getById($id) {
        return MenuPizzas::find($id)->belongsTo('App\Models\Menu');
    }

    public function menu() {
        return $this->belongsTo('App\Models\Menu', 'id');
    }

    public function pizza() {
        return $this->hasOne('App\Models\Pizza', 'id');
    }
}