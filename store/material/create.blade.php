@extends('layouts.addmaterial')
@section('content')
    <h1 style="color:darkturquoise;font-family:'Times New Roman', Times, serif">Add Materials</h1><br>
<div class="container">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#register">
  Add Material
</button>
 @if(session('status'))
                  <div class="alert alert-success" role="alert">
                    {{session('status')}}
                   </div>
  @endif

<!-- Modal For add materials -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color:Blue;font-family:'Times New Roman', Times, serif" class="modal-title" id="exampleModalLabel">Add Borrower</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <form  method="POST"  action="{{route('material.store')}}" enctype="multipart/form-data">
          @csrf
        <div class="modal-body"> 
          @include('store.material.matmodal')                         
         </div>
      </form>  
      </div>
  </div>
</div>
@endsection