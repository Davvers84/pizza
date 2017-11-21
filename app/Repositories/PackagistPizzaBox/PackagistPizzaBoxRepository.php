<?php

namespace App\Repositories\PackagistPizzaBox;

use App\Repositories\BaseRepository;
use App\Models\PackagistPizzaBox;

/**
 * Class PackagistPizzaBoxRepository
 * @package App\Repositories\PackagistPizzaBox
 */
Class PackagistPizzaBoxRepository extends BaseRepository implements PackagistPizzaBoxRepositoryInterface
{
    /**
     * @var PackagistPizzaBox
     */
    private $model;

    /**
     * PackagistPizzaBoxRepository constructor.
     * @param PackagistPizzaBox $model
     */
    public function __construct(PackagistPizzaBox $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return PackagistPizzaBox::all();
    }
}