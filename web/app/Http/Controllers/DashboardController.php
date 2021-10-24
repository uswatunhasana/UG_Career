<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dataweb;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function index()
    {
        $datawebs = Dataweb::all();
        $beritas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(3)
        ->get();
        return view('dashboard', compact('beritas','datawebs'));
    }


    public function create()
    {
        //
    }
    


    public function store(Request $request)
    {
        //
    }

    public function editQuestion(Request $request, $id){
        
    }


    public function show($id)
    {
        $beritas = Berita::where('id','=',$id)->select('*')->get();
        $kategoris = Berita::select('jenis_berita',DB::raw('count(jenis_berita) as total'))
        ->groupby('jenis_berita')
        ->orderby('jenis_berita','asc')
        ->get();
        $listberitas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(5)
        ->get();
        return view('user.beritasingle', compact('beritas','kategoris','listberitas'));

    }
    
    public function beritashow(Berita $beritas)
    {
        if($beritas->jenis_berita == 'Internship'){
        $beritas= DB::table('beritas')->where($beritas->jenis_berita,'=','Internship')->orderBy('created_at', 'desc')->paginate(2);
        } elseif ($beritas->jenis_berita == 'Loker'){
            $beritas= DB::table('beritas')->where($beritas->jenis_berita,'=','Internship')->orderBy('created_at', 'desc')->paginate(2);
        }else{
            $beritas= DB::table('beritas')->where($beritas->jenis_berita,'=','Internship')->orderBy('created_at', 'desc')->paginate(2);
        }
        
        $kategoris = Berita::select('jenis_berita',DB::raw('count(jenis_berita) as total'))
        ->groupby('jenis_berita')
        ->orderby('jenis_berita','asc')
        ->get();
        $listberitas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(5)
        ->get();
       
        return view('user.beritakategori', compact('beritas','kategoris','listberitas'));

    }
    public function beritaall()
    {
        $beritas= DB::table('beritas')->orderBy('created_at', 'desc')->paginate(5);
        $kategoris = Berita::select('jenis_berita',DB::raw('count(jenis_berita) as total'))
        ->groupby('jenis_berita')
        ->orderby('jenis_berita','asc')
        ->get();
        $listberitas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(5)
        ->get();
       
        return view('user.berita', compact('beritas','kategoris','listberitas'));
    }
    public function beritapengumuman()
    {
        $beritas= DB::table('beritas')->where('jenis_berita','=','Pengumuman')->select('*')->orderBy('created_at', 'desc')->paginate(5);
        $kategoris = Berita::select('jenis_berita',DB::raw('count(jenis_berita) as total'))
        ->groupby('jenis_berita')
        ->orderby('jenis_berita','asc')
        ->get();
        $listberitas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(5)
        ->get();
       
        return view('user.berita', compact('beritas','kategoris','listberitas'));
    }
    public function beritaloker()
    {
        $beritas= DB::table('beritas')->where('jenis_berita','=','Pengumuman')->select('*')->orderBy('created_at', 'desc')->paginate(5);
        $kategoris = Berita::select('jenis_berita',DB::raw('count(jenis_berita) as total'))
        ->groupby('jenis_berita')
        ->orderby('jenis_berita','asc')
        ->get();
        $listberitas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(5)
        ->get();
       
        return view('user.berita', compact('beritas','kategoris','listberitas'));
    }
    public function beritaintern()
    {
        $beritas= DB::table('beritas')->where('jenis_berita','=','Pengumuman')->select('*')->orderBy('created_at', 'desc')->paginate(5);
        $kategoris = Berita::select('jenis_berita',DB::raw('count(jenis_berita) as total'))
        ->groupby('jenis_berita')
        ->orderby('jenis_berita','asc')
        ->get();
        $listberitas = Berita::select('judul_berita', 'foto', 'created_at','id')
        ->orderBy('created_at', 'desc')
        ->latest()
        ->take(5)
        ->get();
       
        return view('user.berita', compact('beritas','kategoris','listberitas'));
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
        //
    }

    public function alumni()
    {
        return view('user.alumni');
    }
}
