<?php

namespace App\Http\Controllers;
use App\Models\Consultation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentConsultation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('welcome');
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

        $valid = $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'middleName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'unique:consultations'],
            'country' => ['required'],
            'vid' => ['required', 'unique:users', 'unique:consultations'],
            'cons_date' => ['required'],
            'cons_time' => ['required'],
        ]);

        if($valid)
            $consult = Consultation::create([
                'first_name' => $request->firstName,
                'middle_name' => $request->middleName,
                'last_name' => $request->lastName,
                'email' => $request->email,
                'country' => $request->country,
                'vid' => $request->vType.'-'.$request->vid,
                'date_for_consultation' => $request->cons_date,
                'time_for_consultation' => $request->cons_time,
            ]);
        // return redirect()->route('welcome', ['success' => 1]);
        if($consult)
            return redirect('/welcome')->with('success', 'Successfully applied for consultation.');

        return back()->with('failed', 'Unable to process your consultation. Please try again.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
