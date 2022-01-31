@extends('BackEnd.master')

@section('title')
    Category Manage
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
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>SL</th>
          <th>Category Name</th>
          <th>Order Number</th>
          <th>Created Date</th>
          <th>Active</th>
        </tr>
        </thead>
        <tbody>
            @php($i =1)
       @foreach ($categories as $cate)
                
          
        <tr>
          <td> {{$i++}} </td>
          <td>  {{ $cate->category_name }}   </td>
          <td>  {{ $cate->order_number }}    </td>
          <td>  {{ $cate->added_on }}        </td>
          <td>
                  @if($cate->category_status == 1)
                  <a class="btn btn-outline-success" href="{{route('Inactive_cate',['category_id'=>$cate->category_id])}}">
                    <i class="fas fa-arrow-up" title="Click to Active" ></i></a>
                  @else
                  <a class="btn btn-outline-primary" href="{{route('category_active',['category_id'=>$cate->category_id])}}">
                    <i class="fas fa-arrow-down" title="Click to Inactive" ></i> </a>
                  @endif

                  <a type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit{{$cate->category_id}}" >
                     <i class="fas fa-edit" title="Click to change it" ></i> </a>
               
                  <a class="btn btn-outline-danger" href="{{route('cate_delete',['category_id'=>$cate->category_id])}}">
                    <i class="fas fa-trash" title="Click too destroy" ></i> </a>
         </td>
        </tr>
    {{-- =========================================model start here======================================== --}}


          <div class="modal fade" id="edit{{$cate->category_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Update Category</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                  </button>
                </div>
                
                <div class="modal-body">
                  <form  action="{{ route('cate_update')}}" method="post" >
                 @csrf
                  <div class="form-group">
                    <label> Category Name </label>
                    <input type="text" class="form-control" name="category_name" value="{{$cate->category_name}}">
                    <input type="hidden" class="form-control" name="category_id" value="{{$cate->category_id}}">
                  </div>

 
                  <div class="form-group">
                    <label> Category number </label>
                    <input type="text" class="form-control" name="order_number" value="{{$cate->order_number}}">
                </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" value="update">update</button>
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
  
@endsection