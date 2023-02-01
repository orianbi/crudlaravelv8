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

       $data = Employee::create($request->all());
       if($request->hasFile('foto')){
        $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
        $data->foto = $request->file('foto')->getClientOriginalName();
        $data->save();
       }
        return redirect()->route('pegawai');

    }

    public function editDataPegawai($id){
        $data = Employee::find($id);
        return view('editDataPegawai', compact('data'));

    }

    public function prosesEditDataPegawai(Request $request, $id){
        $data = Employee::find($id);
        $data->nama = $request->input('nama');
        $data->jenis_kelamin = $request->input('jenis_kelamin');
        $data->no_telpon = $request->input('no_telpon');
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $extension = $file->getClientOriginalName();
            $filename = time().'.'.$extension;
            $file->move('fotopegawai/', $filename);
            $data->foto = $filename;

        }
        $data->save();
        return redirect()->route('pegawai');
    }

    public function hapusDataPegawai($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai');
    }
}
