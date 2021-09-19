<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if(Auth::user()){

            $doctor = Doctor::create([
                'name'=>$request->name,
                'specialization'=>$request->specialization,
            ]);
            return redirect()
            ->route('doctor')
            ->with('message', 'Medico cadastrado com sucesso!');
        }
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {   
        // dd('test');
        // return $doctor;
        return view('components/edit-form-doctor', ['doctor' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
        if(Auth::user()){

            $doctor->update($request->all());
            
            return redirect()
            ->route('doctor')
            ->with('message', 'Dados do Medico foram atualizados com sucesso!');
        }return redirect('/login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
        if (Auth::user()) {
            
            $doctor->delete();
            return redirect()
            ->route('doctor')
            ->with('message', 'medico excluido dos registros com sucesso!');
        }
        return redirect('/login');
    }
}
