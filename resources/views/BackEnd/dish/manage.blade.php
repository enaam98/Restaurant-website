@extends('BackEnd.master')

@section('title')
    Delivery Boy Manage
@endsection

@section('content')
   
<div class="card">
{{--  for display massage --}}
  @if( Session::get('sms'))
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>{{ Session::get('sms')}}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
@endif
<div class=" card-my-5">
    <div class="card-header">
      <h3 class="card-title">Dish Manage</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th> Name</th>
          <th>category_name</th>
          <th>dish_detail</th>
          <th>dish_image</th>
          <th>added_on</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @php($i =1)
       @foreach ($dishes as $dish)
                
          
        <tr>
          <td> {{$i++}} </td>
          <td>  {{ $dish->dish_name }}   </td>
          <td>  {{ $dish->category_name }}   </td>
          <td>  {{ $dish->dish_detail }}    </td>
          <td> <img src="public/assets/BackEndSourceFile/dish_img/وجبة1.jpg" alt="" style=" height:70px; width:70px; border-radius:50%" > </td>
          <td>  {{ $dish->created_at }} </td>
        
          <td>
                  @if($dish->dish_status == 1) 
                  <a class="btn btn-outline-success" href="{{route('dish_inactive',['dish_id'=>$dish->dish_id])}} ">
                    <i class="fas fa-arrow-up" title="Click to Active" ></i></a>
                  @else 
                  <a class="btn btn-outline-primary" href="{{route('dish_active',['dish_id'=>$dish->dish_id])}}">
                    <i class="fas fa-arrow-down" title="Click to Inactive" ></i> </a>
                  @endif

                  <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{$dish->dish_id}}" >
                     <i class="fas fa-edit" title="Click to change it" ></i> </a>
               
                  <a class="btn btn-outline-danger" href="{{route('delete_dish',['dish_id'=>$dish->dish_id])}}">
                    <i class="fas fa-trash" title="Click too destroy" ></i> </a>
         </td>
        </tr>
        
        {{-- =========================================model start here======================================== --}}

   
        <div class="modal fade" id="edit{{$dish->dish_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Boy</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"></span>
                </button>
              </div>
              
              <div class="modal-body">
                <form  action="{{ route('update_dish')}}" method="post" >
               @csrf
                <div class="form-group">
                  <label> Category Name </label>
                  <input type="text" class="form-control" name="dish_name" value="{{$dish->dish_name}}">
                  <input type="hidden" class="form-control" name="dish_id" value="{{$dish->dish_id}}">
                </div>

                <div class="form-group">
                  <label> Category </label>
                  <select  class="form-control" name="category_id"> 
                    <option> ---select category---</option>
                    @foreach ($categories as $cate)
                <option value="{{$cate->category_id}}"> {{$cate->category_name}} </option>
                    @endforeach
                  </select>
              </div>

              <div class="form-group">
                <label> Detail </label>
                 <textarea type="text" class="form-control" name="dish_detail" rows="6"> {{$dish->dish_detail}} </textarea>
            </div>

            <div class="form-group">
              <label> Previous Image </label>
              <img src="public/assets/BackEndSourceFile/dish_img/وجبة1.jpg" style=" height:70px; width:70px; border-radius:50%"> 
               <input type="file" class="form-control" name="dish_image" accept="image/*"> 
          </div>
          <div class="card">
            <div class="card-header text-center" > Dish Attribute   </div>
            <div class="card-body">
                   <div class="form-group">
                   <div class="row">
                    <label> Previous Price </label>
                   <div class="col-md-6">
                        <input type="text" class="form-control" name="full_price" value="{{$dish->full_price}}" >
                   </div> 
                 <div>
                   <!--
                  <div class="form-group">
                  <div class="row">
                   <label> Previous Image </label>
                    <div class="col-md-6 mt-2">
                        <input type="text" class="form-control" name="half_price" value=""  >
                   </div> 
                   </div>
                   </div> -->
                 </div>
                   </div>
            </div>
           </div>


               

              </div>
              <div class="modal-footer">
               
                <button type="submit" class="btn btn-outline-primary btn-block" value="update">update</button>
              </div>
            </div>
          </div>
        </div>
      </form>

    {{-- =========================================model end here======================================== --}}

       @endforeach
       
        </tbody>
      </table>
    </div>
  </div>
</div>
  
@endsection