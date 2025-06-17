<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class ContectController extends Controller{
public function index(Request $request)
    {
        return view('contect.index');
    }
    public function storeContact(Request $request){
        $name = $request->input('name');
        $mob=$request->input('phone');
        $time=$request->input('time');
        $branch=$request->input('branch');
        $date=$request->input('date');
        $numberOfPeople=$request->input('number');
        $message=$request->input('message');
        $order=new Order();
        $order->name=$name;
        $order->mob=$mob;
        $order->time=$time;
        $order->branch=$branch;
        $order->date=$date;
        $order->noofperson=$numberOfPeople;
        $order->comment=$message;
        $order->save();
        return redirect()->back();
        // echo $date;
        // exit;

     }
}


?>
