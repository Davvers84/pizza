<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    public $table = 'pizza';

    public function getAll() {
        return Pizza::all();
    }

    public function getById($id) {
        return Pizza::find($id);
    }
}
