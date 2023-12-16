<?php

namespace App\Http\Controllers\Api;

use App\Models\Date;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class ReservationController extends Controller
{
    public function store(Request $request){

      
        $data=$request->all();


        $newOrder = new Reservation();
        $newOrder->name          = $data['name'];
        $newOrder->phone         = $data['phone'];
        $newOrder->service       = $data['service'];
        
        $newOrder->status        = 0;
        $newOrder->date_id       = $data['date_id'];
        
        $date = Date::where('id', $newOrder->date_id)->firstOrFail();
        //$date->reservation_id =  $newOrder->id;
        //dd($date);
        
        $oredersimili = Reservation::where('date_id', $newOrder->date_id)->count();
        //$date->reservation_id =  $newOrder->id;
        //dd($oredersimili );
        if($oredersimili < $date->max_res - 1){

            $newOrder->save();
        }else if($oredersimili == $date->max_res - 1){
            $newOrder->save();
            $date->visible = 0;
        }
        // $arrId = array($newOrder->id);
        // $date->reservations()->sync($arrId ?? []);
        
        // dd($newOrder->id);
        // dd($date->reservation_id);
        $date->update();
        
        // ritornare un valore di successo al frontend
        return response()->json([
            'success' => true,
        ]);

        // return response()->json($request->all()); // solo per debuggare
    }
}
