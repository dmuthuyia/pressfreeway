<?php

namespace pressfreeway\Http\Controllers;

use pressfreeway\Cart;
use pressfreeway\Token;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

//use Illuminate\Support\Facades\Request;

class CartController extends Controller
{

    public function postAddToCart()
    {
        $rules = array(

            'amount' => 'required|numeric',
            'token' => 'required|numeric|exists:token,id',
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::route('token')->with('error', 'The token could not added to your cart!');
        }

        $user_id = Auth::user()->id;
        $token_id = Input::get('token');
        $amount = Input::get('amount');

        $token = Token::find($token_id);
        $total = $amount * $token->price;

        $count = Cart::where('token_id', '=', $token_id)->where('user_id', '=', $user_id)->count();

        if ($count) {

            return Redirect::route('token')->with('error', 'The token already in your cart.');
        }

        Cart::create(
            array(
                'user_id' => $user_id,
                'token_id' => $token_id,
                'amount' => $amount,
                'total' => $total,
            ));

        return Redirect::route('cart');
    }

    public function getIndex()
    {

        $user_id = Auth::user()->id;
        //$user_id = "3";

        $cart_tokens = Cart::with('Tokens')->where('user_id', '=', $user_id)->get();

        $cart_total = Cart::with('Tokens')->where('user_id', '=', $user_id)->sum('total');

        //die($cart_tokens->Tokens->amount);

        if (!$cart_tokens) {

            return Redirect::route('token')->with('error', 'Your cart is empty');
        }

        return view('tokens.cart')
            ->with('cart_tokens', $cart_tokens)
            ->with('cart_total', $cart_total);
    }

    public function getDelete($id)
    {

        $cart = Cart::find($id)->delete();

        return Redirect::route('cart');
    }

}
