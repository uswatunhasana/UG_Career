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
        //
    }

   
    public function store(Request $request)
    {
        //
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
