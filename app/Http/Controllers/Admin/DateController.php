<?php

namespace App\Http\Controllers\Admin;

use App\Models\Date;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DateController extends Controller
{
    public function updatestatus($date_id)
    {
        $date = Date::find($date_id);
        if ($date) {
            $date->visible = !$date->visible; // Inverte lo stato corrente
            $date->save();
        }
        return redirect()->back();
    }
    public function upmaxres($date_id)
    {
        $date = Date::find($date_id);
        $date->max_res ++;
        $date->save();
        
        return redirect()->back();
    }
    public function downmaxres($date_id)
    {
        $date = Date::find($date_id);
        if($date->max_res > 0){

            $date->max_res --;
            $date->save();
        }
        
        return redirect()->back();
    }

    public function index()
    {
        $dates = Date::paginate(100);

        return view('admin.dates.index', compact('dates'));       
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
