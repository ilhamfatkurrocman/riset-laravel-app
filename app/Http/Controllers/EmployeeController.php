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
}
