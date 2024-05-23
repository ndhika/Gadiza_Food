<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }

    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_menu' => 'required|integer',
            'id_card' => 'required|string',
            'data_image' => 'required|image',
            'nama_image' => 'required|string',
            'nama_card' => 'required|string',
        ]);

        $image = $request->file('data_image');
        $imageData = file_get_contents($image->getRealPath());

        Menu::create([
            'id_menu' => $request->id_menu,
            'id_card' => $request->id_card,
            'data_image' => $imageData,
            'nama_image' => $request->nama_image,
            'nama_card' => $request->nama_card,
        ]);

        return redirect()->route('menus.index')->with('success', 'Menu item created successfully.');
    }

    public function show(Menu $menu)
    {
        return view('menu.show', compact('menu'));
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'id_menu' => 'required|integer',
            'id_card' => 'required|string',
            'nama_image' => 'required|string',
            'nama_card' => 'required|string',
        ]);

        $data = $request->only(['id_menu', 'id_card', 'nama_image', 'nama_card']);

        if ($request->hasFile('data_image')) {
            $image = $request->file('data_image');
            $data['data_image'] = file_get_contents($image->getRealPath());
        }

        $menu->update($data);

        return redirect()->route('menus.index')->with('success', 'Menu item updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu item deleted successfully.');
    }
}
