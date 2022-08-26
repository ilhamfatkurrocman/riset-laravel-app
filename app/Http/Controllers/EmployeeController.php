<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        //Get data
        $data = Employee::all();
        //dd($data); //Seperti echo

        return view('datapegawai', compact('data'));
    }

    public function tambahdatapegawai() 
    {
        return view('tambahpegawai');
    }

    public function insertdatapegawai(Request $request)
    {
        // dd($request->all());
        Employee::create($request->all());

        return redirect()->route('pegawai')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandatapegawai($id)
    {
        $data = Employee::find($id);
        // dd($data);
        
        return view('tampilpegawai', compact('data'));
    }

    public function updatedatapegawai(Request $request, $id)
    {
        $data = Employee::find($id);
        $data->update($request->all());

        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diupdate');
    }
}
