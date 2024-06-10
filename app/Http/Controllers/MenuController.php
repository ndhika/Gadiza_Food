<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->user()->role === 'admin') {
            $menus = Menu::all();
            return view('admin.menuAdmin.menuAdmin', compact('menus'));
        } else {
            $menus = Menu::where('status_aktif', '=', 'Aktif')->get();
            return view('menu.menu', compact('menus'));
        }
    }

    /**
     * Show the history of soft deleted menus.
     */
    public function indexHistory()
    {
        $menus = Menu::where('status_aktif', 'Hapus')->get();
        return view('admin.menuAdmin.history', compact('menus'));
    }

    /**
     * Show in frontend.
     */
    public function showMenu()
    {
        $menu = Menu::where('status_aktif', '=', 'Aktif')->get();
        return view('/menu/menu', compact('menu')); 
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
            'image' => 'required|file|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('', $filename, 'public_img');
        }

        $menu = Menu::create([  
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $filename, 
            'category' => $request->category,
            'status_aktif' => 'Aktif',
            'slug_link' => Str::slug($request->name)
        ]);

        return redirect()->route('menuAdmin.index')->with('success', 'Menu created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug_link)
    {
        $menu = Menu::where('slug_link', $slug_link)->firstOrFail();
        return view('admin.menuAdmin.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug_link)
    {
        $menu = Menu::where('slug_link', $slug_link)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
        ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        
        $filename = $image->getClientOriginalExtension();
        Storage::disk('public_img')->put($filename, file_get_contents($image));

        if ($menu->image) {
            Storage::disk('public_img')->delete($menu->image);
        }

        $menu->update(['image' => $filename]);
    }

        $menu->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'category' => $request->category,
            'slug_link' => Str::slug($request->name, '-'), 
        ]);

        return redirect()->route('menuAdmin.index')->with('success', 'Menu updated successfully');
    }


    /**
     * Soft delete the specified resource from storage.
     */
    public function softdelete($slug_link)
    {
        $menu = Menu::where('slug_link', $slug_link)->firstOrFail();
        $menu->update([
            'status_aktif' => 'Hapus',
        ]);

        return redirect()->route('menuAdmin.index')->with('success', 'Menu deleted successfully.');
    }

    /**
     * Recover the soft deleted menu.
     */
    public function recover($slug_link)
    {
        $menu = Menu::where('slug_link', $slug_link)->firstOrFail();
        $menu->update([
            'status_aktif' => 'Aktif',
            'deleted_at' => null,
        ]);

        return redirect()->route('menuAdmin.index')->with('success', 'Menu recovered successfully.');
    }

    /**
     * Permanently delete the specified resource from storage.
     */
    public function destroy($slug_link)
    {
        $menu = Menu::where('slug_link', $slug_link)->firstOrFail();
        $menu->delete();

        return redirect()->route('menuAdmin.index')->with('success', 'Menu permanently deleted successfully.');
    }
}
