<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function getAll() {
        return Pizza::with('menuPizzas', 'menu')->get();
    }

    public function getById($id) {
        return Pizza::find($id);
    }

    public function menuPizzas() {
        return $this->belongsTo('App\Models\MenuPizzas', 'pizza_id');
    }

    public function dough() {
        return $this->hasOne('App\Models\Dough', 'id');
    }
}
