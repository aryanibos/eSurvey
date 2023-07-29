<?php

namespace App\Http\Controllers;

use App\Models\IbuHamil;
use Illuminate\Http\Request;

class IbuHamilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $IbuHamils = IbuHamil::all();
        return view('admin.ibu_hamil.index', compact('IbuHamils'));
    }

    public function show(string $id)
    {
        $IbuHamil = IbuHamil::findOrFail($id);
        return view('admin.ibu_hamil.detail', compact('IbuHamil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $IbuHamil = IbuHamil::findOrFail($id);
        return view('admin.ibu_hamil.edit', compact('IbuHamil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'user_id' => 'required',
            'nama_ibu' => 'required',
            'tgl_lahir' => 'required',
            'alamat' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'no_hp' => 'required',
            'hamil_ke' => 'required',
            'haid_terakhir' => 'required',
            'tekanan_darah' => 'required',
            'responden' => 'required',
        ]);


        $tanda_tangan_lama = IbuHamil::find($id)->tanda_tangan;
        if ($request->tanda_tangan == null) {
            $validate['tanda_tangan'] = $tanda_tangan_lama;
        } else {
            $folderPath = public_path('upload/');

            $image_parts = explode(";base64,", $request->tanda_tangan);

            $image_type_aux = explode("image/", $image_parts[0]);

            $image_type = $image_type_aux[1];

            $image_base64 = base64_decode($image_parts[1]);

            $signature = uniqid() . '.' . $image_type;

            $file = $folderPath . $signature;

            file_put_contents($file, $image_base64);

            $validate['tanda_tangan'] = $signature;
        }


        IbuHamil::find($id)->update($validate);
        return redirect()->route('ibu-hamil')->with('success', 'Data berhasil diubah');
    }
}
