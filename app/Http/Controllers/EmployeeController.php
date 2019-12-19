<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::paginate(10);
        return view('employee',['employee' => $employee]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function cari(Request $request){
        
        $employee = Employee::where('nama','like',"%".$request->cari."%")->orWhere('umur','like','%'.$request->cari.'%')->orWhere('jabatan','like','%'.$request->cari.'%')->paginate();
        if ($employee) {
            return view('employee',['employee' => $employee]);
        }else{
            abort(404);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama;
        $jabatan    = $request->jabatan;
        $umur   = $request->umur;

        $messages = [
            'nama.required' => 'Nama harus di isi',
            'jabatan.required' => 'Jabatan harus di isi',
            'umur.required' => 'Umur harus di isi',
            'umur.numeric' => 'Umur harus angka',
        ];
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'umur'  => 'required|numeric'
        ],$messages);
        Employee::create([
            'nama' => $nama,
            'jabatan' => $jabatan,
            'umur'  => $umur,
            'created_at' => now()
        ]);
        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employee/edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->nama = $request->nama;
        $employee->jabatan = $request->jabatan;
        $employee->umur = $request->umur;
        $employee->updated_at = now();
        $employee->save();
        return \redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return \redirect('employee');
    }
}
