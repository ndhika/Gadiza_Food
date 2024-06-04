<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function menu()
    {
        $menus = Menu::all();
        return view('menu/menu', compact('menus'));
    }
}
