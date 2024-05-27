<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{

    public function store(request $request)
    {
        $this->validate($request,[
    'photo'     => 'required|file|mimes:jpeg,png,jpg',
    'username'  => 'required|string|max:225',
    'no_telepon'=> 'required|integer',
    'alamat_lengkap'   => 'required|string|max:225',
    'email'     => 'required|string|max:225',
]);
    $photo = $request->file('photo');
    profile::create([
        'photo'         =>$photoName,
        'username'      =>$request->username,
        'no_telepon'         =>$request->no_telepon,
        'alamat_lengkap'       =>$request->alamat_lengkap,
        'email'         =>$request->email,
        'created_at'    =>NOW(),
        'updated_at'    =>NOW()
    ]);
    return redirect()->route('profileAdmin.index')->with(
        ['success'=> 'Data Berhasil Ditambah!']
    );
    }
    public function edit($id)
    {
        $data = Model::findOrFail($id);
        return view('edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Model::findOrFail($id);
    
        $data->update($request->all());
        return redirect()->route('nama.route')->with('success', 'Data berhasil diperbarui');
    }
    public function index()
    {
        $user = Auth::user();
        return view('admin.pemesananAdmin.profileAdmin.profile');

        $user = Auth::user();
        return view('admin.pemesananAdmin.profileAdmin.edit');
    }

    public function changePhoto(Request $request)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $fileName = time() . '_' . $photo->getClientOriginalName();
            $photo->storeAs('photos', $fileName); // Simpan gambar di direktori 'photos'
    
            // Perbarui nama file gambar di database
            auth()->user()->update(['photo' => $fileName]); // Misalnya, menyimpan nama file di kolom 'photo' pada tabel 'users'
    
            return redirect()->back()->with('success', 'Foto berhasil diubah.');
        }
    
        return redirect()->back()->with('error', 'Gagal mengubah foto.');
    }
}

    
