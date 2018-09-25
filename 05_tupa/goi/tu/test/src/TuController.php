<?php

namespace Tu\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Tu\Test\TuModel;

class TuController extends Controller
{
    public function index()
    {
        $data = TuModel::all()->toArray();
        
        return view('package::list',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('package::add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sp = new TuModel;
        $sp->name = $request->txtSP;
        $sp->price = $request->txtSL;
        $sp->save();
        return redirect('package'); 
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
        $data = TuModel::find($id);
        return view('package::edit',compact('data'));
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
        $sp = TuModel::find($id);
        $sp->name = $request->txtSP;
        $sp->price = $request->txtSL;
        $sp->save();
        return redirect('package');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TuModel::destroy($id);
        return redirect()->back();
    }
}
