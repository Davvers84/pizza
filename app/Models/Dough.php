<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dough extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function getAll() {
        return Dough::all();
    }

    public function getById($id) {
        return Dough::find($id);
    }

    public function pizza() {
        return $this->belongsTo('App\Models\Pizza', 'id');
    }
}
