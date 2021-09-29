<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dataweb;
use App\Models\Berita;

class DashboardController extends Controller
{

    public function index()
    {
        $beritas = Berita::all();
        $datawebs = Dataweb::all();
        $beritas = Berita::select('judul_berita', 'foto', 'created_at')
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


    public function show($id)
    {
        //
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
}
