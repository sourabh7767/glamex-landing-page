<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Redirect;
use Validator;

class ContactUs extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'email' => 'required|email:rfc,dns,filter|email',
            'message' => 'required',
            // 'iso_code' => 'required',
            // 'phone_number' => 'required|unique:users,phone_number,'.$id.',id,deleted_at,NULL|min:8|max:15'
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->to('/#contactUsSechtion')->withInput()->withErrors($validator);
        }  
        $inserted = FacadesDB::table("contact_us")->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'ip' => $request->ip()
        ]);
        if($inserted){
            return redirect()->back()->with("success","Message Sent!");
        }else{
            return redirect()->back()->with("error","Something went wrong!");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
