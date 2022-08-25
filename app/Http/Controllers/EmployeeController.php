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
}
