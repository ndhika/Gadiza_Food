<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\MenuAdmin;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;

class MenuAdminController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $menuAdmins = MenuAdmin::all();
        return view('admin.menuAdmin.index', compact('menuAdmins'));
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.menuAdmin.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);
    
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());
    
        //create post
        MenuAdmin::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);
    
        //redirect to index
        return redirect()->route('admin.menuAdmin.MenuAdmin')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    
}