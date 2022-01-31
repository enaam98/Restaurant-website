@extends('FrontEnd.master')

@section('title')
    Cart Show item
@endsection


@section('content')

<div class="products">
    <div class="container">
        <div class="col-md-9 product-w3ls-tight">

            <div class="card">
                <h3 style="  text-align: center; background-color:orangered; height:70px; margin-top:40px; width:auto;" class=" card-header text-center">
                    Cart Item </h3>
                    <div class="card-body">


<table class="table table-bordered">
    <thead>
      <tr>
         
         
        <th scope="col">SL</th>
        <th scope="col">Dish Name</th>
        <th scope="col">Dish Image</th>
        <th scope="col">Dish Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Total Price</th>
      </tr>
         
    </thead>
    <tbody>

        @php($i=1)
        @foreach ($CartDish as $dish)
      <tr>
        <th scope="row">{{$i++}}</th>
        <td >{{$dish->dish_name}}</td>
        <td ><img src="{{asset($dish->options->image)}}" style="height: 50px; width:50px; border-radius:50px" ></td>
        <td >{{$dish->price}}</td>
        <td >{{$dish->qty}}</td>
        <td >{{$subTotal = $dish->price*$dish->qty}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>

                    </div>
            </div>
        </div>
    </div>
</div>


  @endsection