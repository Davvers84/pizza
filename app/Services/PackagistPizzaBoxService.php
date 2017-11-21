<?php

namespace App\Services;

use App\Repositories\PackagistPizzaBox\PackagistPizzaBoxRepositoryInterface;

/**
 * Class PackagistPizzaBoxService
 * @package App\Services\PackagistPizzaBoxService
 */
class PackagistPizzaBoxService
{
    /**
     * @var PackagistPizzaBoxRepositoryInterface
     */
    private $packagistpizzabox;

    /**
     * PackagistPizzaBoxService constructor.
     * @param PackagistPizzaBoxRepositoryInterface $packagistpizzabox
     */
    public function __construct(PackagistPizzaBoxRepositoryInterface $packagistpizzabox)
    {
        $this->packagistpizzabox = $packagistpizzabox;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return $this->packagistpizzabox->all();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        return $this->packagistpizzabox->find($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->packagistpizzabox->find($id);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        return $this->packagistpizzabox->create($request);
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id)
    {
        $this->packagistpizzabox->update($id, $request);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->packagistpizzabox->delete($id);
    }
}