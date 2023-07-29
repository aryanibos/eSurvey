<?php

namespace App\Http\Controllers;

use App\Models\IbuHamil;
use App\Models\IbuHamilQuisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormQuisionerController extends Controller
{
    public function list()
    {
        $list = IbuHamilQuisioner::all();
        return view('admin.quisioner.index', compact('list'));
    }

    public function show($id)
    {
        $show = IbuHamilQuisioner::findOrFail($id);
        // mengubah string menjadi array untuk status
        $ubah_status_menjadi_array = explode(',', $show->status);
        return view('admin.quisioner.detail', compact('show', 'ubah_status_menjadi_array'));
    }

    public function index()
    {
        $ibuHamil = IbuHamil::all();
        return view('user.form', compact('ibuHamil'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
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



        $folderPath = public_path('upload/');

        $image_parts = explode(";base64,", $request->tanda_tangan);

        $image_type_aux = explode("image/", $image_parts[0]);

        $image_type = $image_type_aux[1];

        $image_base64 = base64_decode($image_parts[1]);

        $signature = uniqid() . '.' . $image_type;

        $file = $folderPath . $signature;

        file_put_contents($file, $image_base64);

        $validate['tanda_tangan'] = $signature;


        IbuHamil::create($validate);



        return redirect()->route('form-quisioner.step2');
    }

    public function step2()
    {
        $ibuHamilQuisioner = IbuHamilQuisioner::all();
        return view('user.form2', compact('ibuHamilQuisioner'));
    }

    public function storeStep2(Request $request)
    {
        // dd($request->all());

        $validate = $request->validate([
            'user_id' => 'required',
            'pertanyaan' => 'required',
            'status' => 'required',
        ]);

        // mengubah status dan pertanyaan dari array to string
        $validate['pertanyaan'] = implode(',', $validate['pertanyaan']);
        $validate['status'] = implode(',', $validate['status']);

        IbuHamilQuisioner::create($validate);

        // $user_id = Auth::user()->id;

        // IbuHamilQuisioner::create([
        //     'user_id' => $user_id,
        //     'pertanyaan' => '1. Saat hamil anak pertama apakah usia ibu kurang
        //     dari atau sama dengan 20 tahun?',
        //     'status' => $request->status[0]
        // ]);
        return redirect()->route('form-quisioner')->with('success', 'Terimakasih atas kerjasama Anda');
    }
}
