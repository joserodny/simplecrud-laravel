<?php

namespace App\Http\Controllers;

use App\Http\Requests\crud\StoreDataInforRequest;
use App\Http\Requests\crud\UpdateDataInfoRequest;
use App\Models\DataInfo;
use Illuminate\Http\Request;

class DataInfosController extends Controller
{
    public function index()
    {
        $data_info = DataInfo::select('id','name', 'age', 'email', 'address')->get();
        return view('crud.index', ['data_info' => $data_info]);
    }

    public function create()
    {
        return view('crud.create');
    }

    public function store(StoreDataInforRequest $request)
    {
        DataInfo::create( $request->validated());
        return redirect()->route('dashboard.crud.index')->with('message', 'Info Created Successfully');
    }

    public function show(DataInfo $crud)
    {
        return view('crud.edit', ['data_info' => $crud]);
    }

    public function edit(DataInfo $dataInfo)
    {
    }

    public function update(UpdateDataInfoRequest $request, DataInfo $crud)
    {
        $crud->update($request->validated());
        return redirect()->route('dashboard.crud.index');
    }

    public function destroy(DataInfo $crud)
    {
        $crud->delete();
        return redirect()->route('dashboard.crud.index')->with('message', 'Successfully deleted');
    }
}
