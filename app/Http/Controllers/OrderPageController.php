<?php


namespace App\Http\Controllers;

use App\Models\OrderPage;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class OrderPageController extends Controller
{
    public function index(Request $request)
    {
        $id = Auth::id();
        $user = Auth::user();
        $order_page  =  OrderPage::where('user_id', $id)->get();

        return view('order_details',compact('order_page','user'));
    }
    public function show($id)
    {
        $user = Auth::user();
        $order_page  =  Order::where('order_id', $id)->where('item', "!=", null)->get();

        return view('more_details',compact('order_page','user'));
    }
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $email = Auth::user()->email;

        $total = $request->total;

        $item1 = $request ->package1;
        $cost1 = $request ->cost1;
        $qyt1 = $request ->qty1;
        $sub_total1 = $request ->sub_tot1;

        $item2 = $request->package2;
        $cost2 = $request->cost2;
        $qyt2 = $request->qty2;
        $sub_total2 = $request->sub_tot2;

        $item3 = $request->package3;
        $cost3 = $request->cost3;
        $qyt3 = $request->qty3;
        $sub_total3 = $request->sub_tot3;

        $order_page = array('user_id'=>$user_id,'total'=>$total);

        $order= OrderPage::create($order_page);
        $order_id = $order->id;

        $orders1 = array('order_id' => $order_id,'item' => $item1,'cost' => $cost1,'qty'=> $qyt1,'sub_total' => $sub_total1);

        $orders2 = array('order_id' => $order_id,'item' => $item2,'cost' => $cost2,'qty'=> $qyt2,'sub_total' => $sub_total2);

        $orders3 = array('order_id' => $order_id,'item' => $item3,'cost' => $cost3, 'qty'=> $qyt3, 'sub_total'=>$sub_total3);
            Order::create($orders1);
            Order::create($orders2);
            Order::create($orders3);

        $order_mail = array('order_id'=> $order_id);
        Mail::send('mail', $order_mail, function($message ) use ($email) {
            $message->to($email, 'Order System')->subject
            ('Order System');
            $message->from('orderassignment27@gmail.com','Order System');
        });

        return redirect('/order_details');
    }
}
