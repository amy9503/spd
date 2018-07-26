<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sesi;

class SesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$openSesi = Sesi::where('status', 1)->get();

        return view('backend.sesi_index')->withSesis(Sesi::all());
        //withSesis tu shortform utk Sesi::all = select * from sesi
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //tambah sesi
    public function create()
    {
        return view('backend.sesi_add')->withSesi(new Sesi);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'pingat' =>'required',
        ]);

        $request['status'] = $request->status == 'on' ? true : false;

        Sesi::create($request->only('name','pingat','status'));

        //shorthand
        return back()->withSuccess('Successfully added.');

        //longhand
        //return bacck()->with(['success' => 'Successfully added']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.sesi_show')->withSesi(Sesi::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.sesi_edit')->withSesi(Sesi::findOrFail($id));
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
         $request->validate([
             'name' =>'required',
             'pingat' =>'required',
         ]);

         $request['status'] = $request->status == 'on' ? true : false;
         
         Sesi::where('id', $id)->update($request->only('name','pingat','status'));
        
         //shorthand
         return redirect()->route('sesi.index')->withSuccess('Successfully updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sesi::destroy($id);
        return back()->withSuccess('Successfully deleted');
    }
}
