<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dataweb; 

class DatawebController extends Controller
{
   
    public function index()
    {
        $datawebs = Dataweb::all();
        return view('admin.dataweb', ['datawebs' => $datawebs]);
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
