<?php

namespace App\Http\Controllers;

use App\Models\Id;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Id = Id::paginate(8);
        return view('index',compact('Id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Id = new Id();
        $Id->name = $request->name;
        $Id->phone = $request->phone;
        $Id->email = $request->email;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('public/images/id',$filename);;
            $Id->picture =$filename;
        }
        $Id->save();

        return redirect()->route('index')->with('Id_add','Id Add Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Id  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Id = Id::where('id',$id)->first();
        return view('show',compact('Id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Id  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Id =Id::find($id);
        return view('edit',compact('Id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Id  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Id = Id::find($request->id);
        $Id->name = $request->name;
        $Id->phone = $request->phone;
        $Id->email = $request->email;
        if ($request->hasfile('image')) {
            $destination ='storage/images/id/'. $Id->picture;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->storeAs('public/images/id',$filename);;
            $Id->picture =$filename;
        }
        $Id->update();

        return redirect()->route('index')->with('Id_update','Id update Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Id  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Id = Id::find($id);
        $destination ='images/id/'. $Id->picture;
        
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $Id->delete();

            return redirect()->back()->with('Id_deleted','Id deleted Succesfully');
    
}
}