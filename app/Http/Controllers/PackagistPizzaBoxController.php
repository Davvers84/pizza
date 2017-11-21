<?php

namespace App\Http\Controllers;

use App\Repositories\PackagistPizzaBox\PackagistPizzaBoxRepositoryInterface;
use App\Services\PackagistPizzaBoxService;
use Illuminate\Http\Request;

/**
 * Class PackagistPizzaBoxController
 * @package App\Http\Controllers
 */
class PackagistPizzaBoxController extends Controller
{
    /**
     * @var PackagistPizzaBoxRepositoryInterface
     */
    private $packagistpizzabox;

    /**
     * PackagistPizzaBoxController constructor.
     * @param PackagistPizzaBoxService $packagistpizzabox
     */
    public function __construct(PackagistPizzaBoxService $packagistpizzabox)
    {
        $this->packagistpizzabox = $packagistpizzabox;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packagistpizzaboxs = $this->packagistpizzabox->all();

        return view('packagistpizzaboxs.index', compact('packagistpizzaboxs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('packagistpizzaboxs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->packagistpizzabox->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $packagistpizzabox = $this->packagistpizzabox->find($id);

        return view('packagistpizzaboxs.show', compact('packagistpizzabox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $packagistpizzabox = $this->packagistpizzabox->edit($id);

        return view('packagistpizzabox.edit', compact('packagistpizzabox'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->packagistpizzabox->update($id, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->packagistpizzabox->delete($id);
    }
}