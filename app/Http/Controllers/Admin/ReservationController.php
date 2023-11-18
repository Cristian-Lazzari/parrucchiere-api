<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{

   
     public function index()
     {
         $reservations = Reservation::paginate(15);;
         return view('admin.reservations.index', compact('reservations'));
     }
  

     public function show($id)
     {
         $reservation = Reservation::where('id', $id)->firstOrFail();
         return view('admin.reservations.show', compact('reservation'));
     }
         
    public function updatestatus($reservation_id)
    {
        $reservation = Reservation::find($reservation_id);
        if ($reservation) {
            $reservation->status = !$reservation->status; // Inverte lo stato corrente
            $reservation->save();
        }
        return redirect()->back();
    }

    

}
