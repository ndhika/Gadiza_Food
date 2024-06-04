<?php

namespace App\Http\Controllers;

use App\Models\MenuAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MenuAdminController extends Controller
{
    public function index(): View
    {
        $menuAdmins = MenuAdmin::all();
        return view('admin.menuAdmin.menuAdmin', compact('menuAdmins'));
    }

    public function create(): View
    {
        return view('admin.menuAdmin.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'price' => 'numeric',
            'content' => 'integer|min:10',
            'title' => 'integer|min:5',
        ]);

        $imageName = time().'.'.$request->foto_product->extension();
        $imagePath->image->move(public_path('storage/images/'), $imageName);

        MenuAdmin::create([
            'image' => $imageName,
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price
        ]);

        return redirect()->route('admin.menuAdmin.index')->with('success', 'Data Berhasil Disimpan!');
    }

    public function edit(MenuAdmin $menuAdmin): View
    {
        return view('admin.menuAdmin.edit', compact('menuAdmin'));
    }

    public function update(Request $request, MenuAdmin $menuAdmin): RedirectResponse
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'price' => 'required|numeric'
        ]);

        if ($request->hasFile('image')) {
            if ($menuAdmin->image) {
                Storage::delete('public/posts/' . $menuAdmin->image);
            }

            $image = $request->file('image');
            $imagePath = $image->storeAs('public/posts', $image->hashName());

            $menuAdmin->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content,
                'price' => $request->price
            ]);
        } else {
            $menuAdmin->update($request->only('title', 'content', 'price'));
        }

        return redirect()->route('menuAdmin.index')->with('success', 'Data Berhasil Diupdate!');
    }

    public function destroy(MenuAdmin $menuAdmin): RedirectResponse
    {
        if ($menuAdmin->image) {
            Storage::delete('public/posts/' . $menuAdmin->image);
        }

        $menuAdmin->delete();
        return redirect()->route('menuAdmin.index')->with('success', 'Data Berhasil Dihapus!');
    }
}
