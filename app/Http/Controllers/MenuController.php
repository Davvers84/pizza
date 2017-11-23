<?php

namespace App\Http\Controllers;

use App\Repositories\MenuRepository;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    protected $menuRepo;

    public function __construct()
    {
        $this->menuRepo = new MenuRepository();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        foreach($this->menuRepo->getAll() as $menu) {

            $menus[] = $menu['attributes']['menu_name'];
            
            //$menus[] = $menu;
            //dd($menu->pizzas());


//            foreach($menu->pizzas() as $menuPizza) {
//                echo '<pre>';
//                print_r($menuPizza);
//                echo '</pre>';
//                foreach($menuPizza->pizza() as $pizza) {
//                    echo '<pre>';
//                    print_r($pizza);
//                    echo '</pre>';
//                }
//            }

        }

        //dd($menus);

        return view('menu')->with(['menus' => $this->menuRepo->getAll()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->menuRepo->firstOrCreate($request->all());
        $this->menuRepo->save();
        return $this->menuRepo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->menuRepo->getById($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->menuRepo->update($id, $request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->menuRepo->destroy($ids);
        return "Menu Deleted.";
    }
}
