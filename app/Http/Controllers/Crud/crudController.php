<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\Models\Crud\CrudModel;
use Illuminate\Http\Request;

class crudController extends Controller
{

    public function index()
    {
        $data = CrudModel::all();
//        dd($data);
        return view('backend.page.index', ['data'=>$data]);
    }


    public function create()
    {
        return view('backend.page.create');
    }


    public function store(Request $request)
    {
        $request->validate([
           'name'=>'required',
           'email'=>'required',
           'address'=>'required',
           'Phone'=>'required'
        ]);
        CrudModel::create($request->all());
        return redirect()->route('home');
    }


    public function show($id)
    {
        $item = CrudModel::findorFail($id);
        return redirect()->route('home', ['item'=>$item]);
    }


    public function edit($id)
    {
        $item = CrudModel::findorFail($id);
        return view('backend.page.edit', ['item'=>$item]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
            'Phone'=>'required'
        ]);
        $item = CrudModel::findorFail($id);
        $item->update($request->all());
        return redirect()->route('home', ['item'=>$item]);
    }


    public function destroy($id)
    {
        $item = CrudModel::findorFail($id);
        $item->delete();
        return redirect()->route('home')->with('Success', 'Success Item Delete');
    }
}
