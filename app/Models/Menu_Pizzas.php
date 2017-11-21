<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuPizzas extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function getAll() {
        return MenuPizzas::all();
    }

    public function getById($id) {
        return MenuPizzas::find($id)->belongsTo('App\Models\Menu');
    }

    public function menu() {
        return $this->belongsTo('App\Models\Menu');
    }
}