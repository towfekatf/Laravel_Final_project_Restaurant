<?php


namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Table;
use function Laravel\Prompts\table;

class TableController extends Controller
{
    public function index(){

        return view('dashboard.pages.table-list');
    }

public function TableCreate(){

    return view('dashboard.pages.create-table');
}



 public function tableReservation()
    {
        $data = table::all();
        if(Auth::user()){

            return view('pages.reservation', ['tables' => $data]);

}
    }

    public function ReservationStore(Request $request)
    {
       
       
        $data['name'] = $request->input('name');
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['guest'] = $request->has('guest');
        $data['date'] = $request->date;
        $data['time'] = $request->time;
        $data['message'] = $request->message;

        Reservation::create($data);
        Alert:: success('Congratulations!,you are succesfully reserved a table');
        return redirect()->back();
       

}


}
