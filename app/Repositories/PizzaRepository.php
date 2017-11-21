<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 08/11/17
 * Time: 18:42
 */

namespace App\Repositories;

use App\Repositories\Contracts\PizzasRepositoryContract;
use App\Models\Pizza;

class PizzasRepository implements PizzasRepositoryContract
{
    protected $pizza;

    public function __construct()
    {
        $this->pizza = new Pizza();
    }

    public function getAll() {
        return $this->pizza->getAll();
    }

    public function getById($id)
    {
        return $this->pizza->getById($id);
    }

    public function update($id, Request $request)
    {
        return $this->pizza->update($id, $request);
    }

    public function destroy($ids)
    {
        Pizza::destroy($ids);
    }
}