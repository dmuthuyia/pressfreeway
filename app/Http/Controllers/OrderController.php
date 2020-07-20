<?php

namespace pressfreeway\Http\Controllers;

use pressfreeway\Cart;
use pressfreeway\Order;
use pressfreeway\Token;

//use aerobusinessconsultancy\Whistle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

//use Illuminate\Support\Facades\Request;

class OrderController extends Controller
{

    public function postOrder()
    {
        $rules = array(

            'shipping_details' => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::route('cart')->with('error', ' additional details field is required!');
        }

        $user_id = Auth::user()->id;

        $shipping_details = Input::get('shipping_details');

        $cart_tokens = Cart::with('tokens')->where('user_id', '=', $user_id)->get();

        $cart_total = Cart::with('Tokens')->where('user_id', '=', $user_id)->sum('total');

        if (!$cart_tokens) {

            return Redirect::route('index')->with('error', 'Your cart is empty.');
        }

        $order = Order::create(
            array(
                'user_id' => $user_id,
                'shipping_details' => $shipping_details,
                'total' => $cart_total,
            ));

        foreach ($cart_tokens as $order_tokens) {

            $order->orderItems()->attach($order_tokens->token_id, array(
                'amount' => $order_tokens->amount,
                'minprice' => $order_tokens->Tokens->minprice,
                'total' => $order_tokens->Tokens->minprice * $order_tokens->amount,
            ));

        }

        Cart::where('user_id', '=', $user_id)->delete();

        return Redirect::route('index')->with('message', 'Your order processed successfully.');
    }

    public function getIndex()
    {

        $user_id = Auth::user()->id;

        if (Auth::user()->admin) {

            $orders = Order::all();

        } else {

            $orders = Order::with('orderItems')->where('user_id', '=', $user_id)->get();
        }

        if (!$orders) {

            return Redirect::route('index')->with('error', 'There is no order.');
        }

        return view('tokens.order')
            ->with('orders', $orders);
    }
}
