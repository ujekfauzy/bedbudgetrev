<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests;

class MenumasterController extends Controller
{
    public function index()
    {
        $menu = menu::all(); 
        return View('menuMaster')->with('menu',$menu);
    }
    
    public function create()
    {
        return View('createMenu');
    }
    public function store()
    {

    }
    public function show($id)
    {

    }
    public function edit($id)
    {}
    public function update ($id)
    {}
    public function destroy($id)
    {
    }

}
