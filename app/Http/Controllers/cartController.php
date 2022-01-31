<?php

namespace App\Http\Controllers;

use App\Dish;
use Illuminate\Http\Request;
use Cart;

class cartController extends Controller
{
     public function insert ( Request $request){

$dish = Dish::where('dish_id', $request->dish_id)->first();

Cart::add([
'id'=> $request->dish_id,
'qty'=> $request->qty,
'name'=> $dish->dish_name,
'price'=> $dish->full_price,
'weight'=> 550,
'options'=> [
   
    'mage'=> $dish->dish_image,
],

]);

return redirect()->route('cart_show');

/*
return view ('FrontEnd.cart.show');*/


     }

    
     public function show(){

    $CartDish = Cart::content();
  
     return view ('FrontEnd.cart.show',compact('CartDish'));
     }
}
