<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class MenuController extends Controller
{   
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    if ($request->user()->role === 'admin') {
        $menus = menu::all();
        return view('admin.menuAdmin.menuAdmin', compact('menus'));
    } else {
        $menus = menu::where('status_aktif', '=', 'Aktif')->get();
        return view('menu.menu', compact('menus'));
    }
    }

    /**
     * Show the history softdalete.
     */
    public function indexHistory()
    {
        $menus = menu::where('status_aktif', 'Hapus')->get();
        return view('admin.menuAdmin.history', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menuAdmin.create');
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);

        // Format the price to match Indonesian format before saving
        $price = number_format($request->price, 2, ',', '.');
        $price = str_replace(',', '', $request->price);
        $price = str_replace('.', '', $price);
        $price = str_replace(',', '.', $price);

            $menu = menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $price,
            'image' => $request->image,
            'category' => $request->category,
            'status_aktif' => 'Aktif',
        ]);

        return redirect()->route('menuAdmin.index')->with('success', 'Menu created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu = menu::findOrFail($id);
        return view('admin.menuAdmin.edit', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
        'status_aktif' => 'required',
    ]);

        // Format the price to match Indonesian format before saving
        $price = number_format($request->price, 2, ',', '.');
        $price = str_replace(',', '', $request->price);
        $price = str_replace('.', '', $price);
        $price = str_replace(',', '.', $price);

        $menu->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $price,
            'image' => $request->image,
            'category' => $request->category,
        ]);

        return redirect()->route('menuAdmin.index')->with('success', 'Menu updated successfully');
    }

    /**
     * Soft delete the specified resource from storage.
     */
    public function softdelete($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update([
            'status_aktif' => 'Hapus',
        ]);

        return redirect()->route('menuAdmin.index')->with('success', 'User deleted successfully.');
    }

    /**
     * Recover the soft deleted menu.
     */
    public function recover($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->update([
            'status_aktif' => 'Aktif',
            'deleted_at' => null,
        ]);

        return redirect()->route('menuAdmin.index')->with('success', 'User recovered successfully.');
    }

    /**
     * Permanently delete the specified resource from storage.
     */
    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menuAdmin.index')->with('success', 'User permanently deleted successfully.');
    }
}
