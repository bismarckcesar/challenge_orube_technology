<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;


class AttendanceController extends Controller
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
        // return $request;
        if(Auth::user()){

            $attendance = Attendance::create([
                'room'=> $request->room,
                'date'=> $request->date,
                'time'=> $request->time,
                'disease'=> $request->disease,
                'user_id'=> Auth::user()->id,
                'doctor_id'=> $request->doctor_id,
                'patient_id'=> $request->patient_id,
            ]);
            return redirect()
            ->route('dashboard')
            ->with('success', 'Atendimento criado com sucesso!');
        }
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
        // return $attendance;
        return view('components/edit-form-attendance', ['attendance' => $attendance]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        if(Auth::user()){

        $attendance->update($request->all());

        return redirect()
        ->route('dashboard')
        ->with('success', 'Dados do atendimento foram atualizados com sucesso!');  
        }
        return redirect('/login');
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
        if(Auth::user()){

        $attendance->delete();
        return redirect()
        ->route('dashboard')
        ->with('success', 'Dados do atendimento foram atualizados com sucesso!');
        }
        return redirect('/login');
    }
}
