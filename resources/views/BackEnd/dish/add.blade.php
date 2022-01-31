@extends('BackEnd.master')

@section('title')
Dish Add
@endsection

@section('content')

 <div class="container">
     <div class="row" >
         <div class="offset-3 col-md-5 my-lg-5">
        @if( Session::get('sms'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('sms')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        @endif

             <div class="card">
                 <div class="card-header text-center">
                    Add Dish
                 </div>
                 <div class="card-body">

                    <form action="{{ route('save_dish_data')}}" method="POST" enctype="multipart/form-data" >
                      @csrf
                        <div class="form-group">
                            <label> Name </label>
                            <input type="text" class="form-control" name="dish_name">
                        </div>

                        <div class="form-group">
                            <label> Category </label>
                            <select  class="form-control" name="category_id">
                              <option> ---select category---</option>
                              @foreach ($categories  as $cate)
                          <option value="{{$cate->category_id}}"> {{$cate->category_name}} </option>
                              @endforeach
                            </select>
                        </div>

                          <div class="form-group">
                            <label> Detail </label>
                             <textarea type="text" class="form-control" name="dish_detail" rows="6"> </textarea>
                        </div>

                          <div class="form-group">
                            <label>  Image </label>
                            <input type="file" class="form-control" name="dish_image" accept="image/*">
                        </div>

                          <div class="form-group">
                            <label> Added On </label>
                            <input type="date" class="form-control" name="added_on">
                        </div>

                          <div class="form-group">
                            <label> Status </label>
                            <div class="radio">
                                <input type="radio" name="dish_status" value="1">Active
                                <input type="radio" name="dish_status" value="0">Inactive
                            </div>
                        </div>



                <div class="card">
                 <div class="card-header text-center" > Dish Attribute   </div>
                 <div class="card-body">
                        <div class="form-group">
                        <div class="row">

                        <div class="col-md-6">
                             <input type="text" class="form-control" name="full_price" placeholder="Enter Price" >
                        </div>

                        <!-- <div class="col-md-6 mt-2">
                             <input type="text" class="form-control" name="half_price" placeholder="Enter 2nd price"  >
                        </div> -->
                        </div>
                        </div>
                 </div>
                </div>



                        <button type="submit" name="btn" class="btn btn-outline-primary btn-block"> Dish Add </button>

                    </form>
                 </div>
             </div>
         </div>
     </div>
 </div>


@endsection
