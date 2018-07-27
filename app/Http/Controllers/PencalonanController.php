<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sesi;
use App\Calon;
use Auth;

class PencalonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //dd ( Auth::user()->calons()->toSql() );
        return view('backend.pencalonan_index')->withCalons(Auth::user()->calons()->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pencalonan_add')
            //->withSesis( Sesi::where('status', true)->get() )
            ->withSesis( Sesi::all() )
            ->withCalon(new Calon);
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
            'sesi_id' => 'required',
            'name' => 'required',
            'icno' => 'required',
            'email' => 'required',
            'asas' => 'required',
        ]);

        //Sesi
        $sesi = Sesi::findOrFail($request->sesi_id);

        //Pencalonan
        $pencalonan = new Calon;
        $pencalonan->name = $request->name;
        $pencalonan->icno = $request->icno;
        $pencalonan->email = $request->email;
        $pencalonan->user_id = Auth::user()->id;
        $pencalonan->sesi_id = $sesi->id;
        $pencalonan->asas = $request->asas;
        $pencalonan->save();

        return back()->withSuccess('Successfully added.');

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
        return view('backend.pencalonan_edit')
            ->withCalon( Calon::findOrFail($id) )
            ->withSesis( Sesi::where('status', 1)->get() );
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
            
            'sesi_id' => 'required',
            'name' => 'required',
            'icno' => 'required',
            'email' => 'required',
            'asas' => 'required'
        ]);

        //sesi
        $sesi = Sesi::findOrFail($request->sesi_id);

        //Pencalonan
        $pencalonan = Calon::findOrFail($id);
        $pencalonan->name = $request->name;
        $pencalonan->icno = $request->icno;
        $pencalonan->email = $request->email;
        $pencalonan->user_id = Auth::user()->id;
        $pencalonan->sesi_id = $sesi->id;
        $pencalonan->asas = $request->asas;
        $pencalonan->save();

        //Calon::where('id', $id)->update($request->only('name', 'icno', 'email', 'sesi_id', 'asas'));

        return redirect()->route('pencalonan.index')->withSuccess('Successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Calon::destroy($id);

        return back()->withSuccess('Successfully deleted');
    }
}
