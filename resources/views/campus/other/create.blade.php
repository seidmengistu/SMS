@extends('layouts.campuspoliceo')
@section('title')
    SMS
@endsection
@section('content')
   
<div style="background-color:chocolate" class="content">
  <div style="background-color:darkblue" class="row">
    <div style="background-color:darkcyan"  class="col-md-12">
      <div  style="background-color:chartreuse"class="card">
          <div  style="background-color:pink"class="card-header">
            <center>  <h4 style="font-family:algerian" class="font-italic" > <b>Others</b></h4></center>
           </div>

        <section class='content'>
          <div  class="container-fluid'">
            <div  style="background-color:darkgoldenrod"class="table-responsive">
                   <center><button style="font-family:alaska" type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
                      <b>Add Others</b>
                      </button></center>
                          <!-- Modal -->
                  @if(session('status'))
                  <div class="alert alert-success" role="alert">
                    {{session('status')}}
                   </div>
                 @endif
               <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                      </div>
                          <form  method="POST"  action="{{route('other.store')}}" enctype="multipart/form-data">
                                 @csrf
                             <div class="modal-body"> 
                               @include('campus.teacher.tform')                         
                            </div>
                       </form>         
                   </div>
                </div>
              </div> 
           </div>
         </div>
        </section>
      </div>
    </div>
  </div>
</div>
@endsection