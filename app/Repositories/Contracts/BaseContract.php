<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 08/11/17
 * Time: 19:44
 */

namespace App\Repositories\Contracts;


interface BaseContract
{
    public function getAll();
    public function getById($id);
    public function update($id, Request $request);
    public function destroy($ids);
}