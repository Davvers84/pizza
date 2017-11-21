<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 08/11/17
 * Time: 19:49
 */

namespace App\Repositories;


use App\Repositories\Contracts\DoughRepositoryContract;
use App\Models\Dough;

class DoughRepository implements DoughRepositoryContract

{

    protected $dough;

    public function __construct()
    {
        $this->dough = new Dough();
    }

    public function getAll() {
        return $this->dough->getAll();
    }

    public function getById($id)
    {
        return $this->dough->getById($id);
    }

    public function update($id, Request $request)
    {
        return $this->dough->update($id, $request);
    }

    public function destroy($ids)
    {
        Dough::destroy($ids);
    }    
    
}