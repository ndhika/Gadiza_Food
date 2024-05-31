<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

use Illuminate\View\View;

class AboutController extends Controller
{
   /**
    * index
    *
    *@return view 
    */
    public function index(): View
    {
        $about = About::latest()->first();
        return view('abouts.index', compact('abouts'));
    }

    /**
     * store
     * @param mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'judul' => 'required|min:5',
            'konten' => 'required|min 15',
            'linkinstagram' => 'required|min:10',
            'linkmaps' => 'required|min:15',
        ]);

        About::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'linkinstagram' => $request->linkinstagram,
            'linkmaps' => $request->linkmaps,
        ]);

        //redirect to index
        return redirect()->route(about.index)->with(['success'=>'Data Berhasil Disimpan!']);
    }

    /**
     * show
     * 
     * @param mixed $id
     * @return view
     */

     public function show(string $id): view
     {
        $about = About::findOrFail($id);
        return view('abouts.show', compact('about'));
     }
     /**
      * edit
      *
      *@param mixed $id
      *@return view
      */
      public function edit(string $id): view
      {
        $about = About::findOrFail($judul, $konten, $linkinstagram, $linkmaps);
        return view('abouts.edit', compact('about'));
      }

      /**
       * update
       * 
       * @param mixed $request
       * @param mixed $id
       * @return RedirectResponse
       */
      public function update(Request $request, $id):RedirectResponse
      {
        $this->validate($request, [
        'judul' => 'required|min:5',
        'konten' => 'required|min 15',
        'linkinstagram' => 'required|min:10',
        'linkmaps' => 'required|min:15',
        ]);
      }
      
}