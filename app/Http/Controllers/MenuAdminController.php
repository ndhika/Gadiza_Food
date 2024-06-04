<?php

namespace App\Http\Controllers;

use App\Models\MenuAdmin;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MenuAdminController extends Controller
{
    public function index(): View
    {
        $menuAdmins = MenuAdmin::all();
        return view('admin.menuAdmin.index', compact('menuAdmins'));
    }

    public function create(): View
    {
        return view('admin.menuAdmin.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'price' => 'required|numeric'
        ]);

        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        MenuAdmin::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price
        ]);

        return redirect()->route('MenuAdmin.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(MenuAdmin $menuAdmin): View
    {
        return view('admin.menuAdmin.edit', compact('menuAdmin'));
    }

    public function update(Request $request, MenuAdmin $menuAdmin): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10',
            'price' => 'required|numeric'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($menuAdmin->image) {
                Storage::delete('public/posts/' . $menuAdmin->image);
            }

            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            $menuAdmin->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'content' => $request->content,
                'price' => $request->price
            ]);
        } else {
            $menuAdmin->update([
                'title' => $request->title,
                'content' => $request->content,
                'price' => $request->price
            ]);
        }

        return redirect()->route('MenuAdmin.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    public function destroy(MenuAdmin $menuAdmin): RedirectResponse
    {
        // Delete image from storage
        if ($menuAdmin->image) {
            Storage::delete('public/posts/' . $menuAdmin->image);
        }

        $menuAdmin->delete();
        return redirect()->route('MenuAdmin.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}