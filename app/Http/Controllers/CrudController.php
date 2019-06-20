<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $data_crud = \App\Crud::all();
        return view('crud.index',['data_crud' => $data_crud]);
    }    
    public function create(Request $request)    
    {
        \App\Crud::create($request->all());
        return redirect('/crud')->with('sukses','Data berhasil diinput');
    }
    public function edit($id)
    {
        $crud = \App\Crud::find($id);
        return view('crud/edit',['crud' => $crud]);
    }
    public function update(Request $request,$id)
    {
        $crud = \App\Crud::find($id);
        $crud->update($request->all());
        return redirect('/crud')->with('sukses','Data berhasil diupdate');
    }
    public function delete($id)
    {
        $crud = \App\Crud::find($id);
        $crud->delete(@crud);
        return redirect('/crud')->with('sukses','Data berhasil dihapus');
    }
}
