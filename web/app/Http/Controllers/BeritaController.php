<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
// use App\Models\User;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita', ['beritas' => $beritas]);
    }

    public function create()
    {
        
    }

   
    public function store(Request $request)
    {   
        $cek_berita = Berita::where('judul_berita', $request->judul_berita)->count();
        if ($cek_berita == 0) {
            $berita = new Berita;
            $berita->jenis_berita = $request->jenis_berita;
            $berita->judul_berita = $request->judul_berita;
            $berita->isi_berita = $request->isi_berita;
            $berita->foto = $request->foto;
            $berita->save();
            Alert::success(' Berhasil Tambah Berita ', ' Silahkan Periksa Kembali');
        } else {
            Alert::error('Judul Berita Sudah Ada ', ' Silahkan coba lagi');
        }
        return redirect()->back();
    }

    
    public function show(Request $request)
    {
        // $data = $this->db->select('*')
        //     ->from('beritas')
        //     ->where('beritas.id', $this->input->post('id'))
        //     ->get()
        //     ->result_array();

        // echo json_encode($data);

        $id = $req->get('id');

        $data = Berita::where('beritas.id','=',$id) 
        ->select('beritas.*')
        ->get();

        return json_encode($data);

    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        DB::table('beritas')->where('id_berita', $id)->delete();
        return redirect()->back();
    }
}
