<?php

namespace App\Http\Controllers\Corporates;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function create()
    {
        return view('corporates.order');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'contact_name' => 'required|string|max:60',
            'phone_number' => [
                'required',
                'max:17', 
                'regex:/^\+375\s(25|29|33|44)\s\d{3}\s\d{2}\s\d{2}$/'
            ],
            'email' => [
                'required',
                'string',
                'regex:/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/'
            ],
            'preferred_messager' => 'required|string',
            'hearing_about_us' => 'required|string',
            'date' => 'required|date_format:Y-m-d',
            'count_of_persons' => 'required|integer',
            'online_or_offline' => 'required|boolean',
        ]);

        $order = Order::updateOrCreate($request->except('_token'));

        dd($order->all());
        return redirect('/');
    }

}
