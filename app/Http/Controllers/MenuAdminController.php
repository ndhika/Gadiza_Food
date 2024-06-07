<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuAdminController extends Controller
{
    public function index()
    {
        $menus = menu::all();
        return view('admin.menuAdmin.menuAdmin', compact('menus'));
    }

    public function create()
    {
        return view('admin.menuAdmin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|string|min:5',
            'content' => 'required|string|min:10',
            'price' => 'required|numeric',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/images/'), $imageName);

        menu::create([
            'image' => $imageName,
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price,
        ]);

        return redirect()->route('menuAdmin.index')->with('success', 'Menu added successfully!');
    }

    public function edit(Product $menu)
    {
        return view('menu.edit', compact('menu'));
    }

    public function update(Request $request, Product $menu)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|string|min:5',
            'content' => 'required|string|min:10',
            'price' => 'required|numeric',
        ]);

        if ($request->hasFile('image')) {
            if ($menu->image) {
                Storage::delete('public/images/' . $menu->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('storage/images/'), $imageName);

            $menu->update([
                'image' => $imageName,
                'title' => $request->title,
                'content' => $request->content,
                'price' => $request->price,
            ]);
        } else {
            $menu->update($request->only('title', 'content', 'price'));
        }

        return redirect()->route('menu.index')->with('success', 'Menu updated successfully!');
    }

    public function destroy(Product $menu)
    {
        if ($menu->image) {
            Storage::delete('public/images/' . $menu->image);
        }

        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu deleted successfully!');
    }
}
