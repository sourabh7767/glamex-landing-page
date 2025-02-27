<?php

namespace App\Http\Controllers;

use App\Mail\NewsLetter;
use Illuminate\Http\Request;
use Validator;

class NewsLetterController extends Controller
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
            'news_letter_email' => 'required|email:rfc,dns,filter|email',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->to('/#newsletter_section')->withInput()->withErrors($validator);
        }  
        $details = [
            'email' => $request->news_letter_email
        ];
        try {
            \Mail::to(env("SUPPORT_MAIL"))->send(new NewsLetter($details));
        } catch (\Throwable $th) {
            redirect()->back()->with("error",$th->getMessage());
        }
        return redirect()->back()->with("success","Subscribed to Newsletter Successfully");
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
