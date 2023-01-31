<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view('datapegawai', compact('data'));
    }

    public function tambahDataPegawai(){
        return view('tambahDataPegawai');
    }

    public function prosesTambahDataPegawai(Request $request){
        // dd($request->all());
       Employee::create($request->all());
        return redirect()->route('pegawai');

    }

    public function editDataPegawai($id){
        $data = Employee::find($id);
        return view('editDataPegawai', compact('data'));

    }

    public function prosesEditDataPegawai(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai');
    }

    public function hapusDataPegawai($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai');
    }
}
