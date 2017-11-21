<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dough extends Model
{
    public $timestamps = false;
    public $table = 'dough';
    protected $guarded = [];

    public function getAll() {
        return Dough::all();
    }

    public function getById($id) {
        return Dough::find($id);
    }
}
