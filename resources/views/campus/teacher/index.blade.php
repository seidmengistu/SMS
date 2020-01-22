@extends('layouts.campuspoliceT')
@section('title')
SMS
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                     <div class="card-header">
                            @isset($results)


    @if(count($results)==0)
         <div class="content"
                          <a href="{{route('teacher.index')}}" class="nav-link">                    
                           <center><p style="font-family:new times roman;color:red">Teacher With This Code Is Not Registered </p><center>

                               
                               <a href="{{route('teacher.create')}}" class="btn btn-success"> Register</a>
                                <a href="{{route('teacher.index')}}" class="btn btn-primary"> Back</a>
                               
                          </a>
                      </div>


@else
       <h4 style="font-family:algerian;color:blue"  class="card-title"> <b> <i> TEACHER LIST</i></b></h4>
                </div>
                    <section class='content'>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="table-responsive">
                                <table class="table table table-bordered table-striped mb-0">
                                    <thead class=" text-success">
                                        <th style="font-family:georgia;color:ForestGreen  ">Name</th>
                                        <th  style="font-family:georgia;color:Fuchsia   ">ID Number</th>
                                        <th style="font-family:georgia ;color:MediumVioletRed   ">Serial Number </th>
                                        <th style="font-family:georgia;color:Green   "> Mark</th>
                                    
                                        <th style="font-family:georgia;color:Crimson  "> Date</th>
                                        <th style="font-family:georgia;color:RebeccaPurple   "> Edit</th>
                                        <th style="font-family:georgia;color:Red  "> Delete</th>
                                        
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($results as $s )
                                        <tr>

                                            <td style="font-family:serif ;color:ForestGreen ">{{$s->fullname}}</td>
                                            <td style="font-family:times new roman ;color:Fuchsia   ">{{$s->idnumber}}</td>
                                            <td style="font-family:georgia ;color:MediumVioletRed  ">{{$s->serialnumber}}</td>
                                            <td style="font-family:times;color:Green  ">{{$s->mark}}</td>
                                          
                                            <td style="font-family:serif ;color:Crimson ">{{$s->date}}</td>
                                            <td>  
                                            <button  class="btn btn-info"  style="font-family:Bodoni MT Black"
                                            data-fullname="{{$s->fullname}}"
                                            data-idnumber="{{$s->idnumber}}" 
                                            data-serialnumber="{{$s->serialnumber}}"
                                            data-mark="{{$s->mark}}"  
                                            
                                            data-date="{{$s->date}}" 
                                            {{--data-image="{{$s->image}}" --}} 
                                            data-id="{{$s->id}}"
                                            data-toggle="modal" data-target="#tedit"
                                            ><b>Edit</b></button>
                                            </td>
                                            <td>
                                           <button style="font-family:Bodoni MT Black"class="btn btn-danger" data-id="{{$s->id}}" data-toggle="modal" data-target="#tdelete"
                                           ><b>Delete</b></button>
                                            </td>
                                        </td>
                                            
                                        </tr>
                                        @endforeach
                                       
                                    </tbody>
@endif
@else

      <h4 style="font-family:algerian;color:blue"  class="card-title"> <b> <i> TEACHERS LIST</i></b></h4>
                 </div>
                    <section class='content'>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="table-responsive">
                                <table class="table table table-bordered table-striped mb-0">
                                    <thead class=" text-success">
                                        <th style="font-family:georgia;color:ForestGreen  ">Name</th>
                                        <th  style="font-family:georgia;color:Fuchsia   ">ID Number</th>
                                        <th style="font-family:georgia ;color:MediumVioletRed   ">Serial Number </th>
                                        <th style="font-family:georgia;color:Green   "> Mark</th>
                                        
                                        <th style="font-family:georgia;color:Crimson  "> Date</th>
                                        <th style="font-family:georgia;color:RebeccaPurple   "> Edit</th>
                                        <th style="font-family:georgia;color:Red  "> Delete</th>
                                        
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($teachers as $ss )
                                        <tr>

                                            <td style="font-family:serif ;color:ForestGreen ">{{$ss->fullname}}</td>
                                            <td style="font-family:times new roman ;color:Fuchsia   ">{{$ss->idnumber}}</td>
                                            <td style="font-family:georgia ;color:MediumVioletRed  ">{{$ss->serialnumber}}</td>
                                            <td style="font-family:times;color:Green  ">{{$ss->mark}}</td>
                                          
                                            <td style="font-family:serif ;color:Crimson ">{{$ss->date}}</td>
                                            <td>  
                                            <button  class="btn btn-info"  style="font-family:Bodoni MT Black"
                                            data-fullname="{{$ss->fullname}}"
                                            data-idnumber="{{$ss->idnumber}}" 
                                            data-serialnumber="{{$ss->serialnumber}}"
                                            data-mark="{{$ss->mark}}"  
                                           
                                            data-date="{{$ss->date}}" 
                                          
                                            data-id="{{$ss->id}}"
                                            data-toggle="modal" data-target="#tedit"
                                            ><b>Edit</b></button>
                                            </td>
                                            <td>
                                           <button style="font-family:Bodoni MT Black"class="btn btn-danger" data-id="{{$ss->id}}" data-toggle="modal" data-target="#tdelete"
                                           ><b>Delete</b></button>
                                            </td>
                                        </td>
                                            
                                        </tr>
                                        <div class="row">
                                            <div class="col-12 text-center"> 
                                                {{$teachers->links()}}
                                            </div>
                                        </div>
                                        @endforeach
                                    </tbody>

            @endisset
            
            {{--modal for delete--}}
                                        
                                       <div class="modal fade" id="tdelete" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content bg-danger">
                                                    <div class="modal-header bg-heading">
                                                        <h5 style="font-family:times new roman" class="modal-title text-center bg-gold" id="exampleModalLabel" > Delete Confirmation</h5>
                                                           
                                                        <button type="button" class="close" data-dismiss="modal"aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                            
                                                    </div>
                                                    <form action="{{route('teacher.destroy','test')}}" method="POST">
                                                        {{method_field('delete')}}
                                                        @csrf
                                                        <div class="modal-body">  
                                                            <p style="font-family:serif" class="text-center"> 
                                                                Are You Sure You Want To Delete This?
                                                            </p>
                                                        <input type="hidden"  name="teacher_id" id="id" value="">
                                                            
                                                        <div class="modal-footer">
                                                            <button style="font-family:centery" type="button" class="btn btn-success" data-dismiss="modal">No,Cancel</button>
                                                            <button style="font-family:centery" type="submit" class="btn btn-warning">Yes,Delete</button>
                                                        </div>
                                                      </div>
                                                    </form>
                                                </div>
                                           </div>
                                       </div>
                                       
                                       
                                   {{--end of delete modal--}}
                                       
                                   

                                    {{--modall for edit button--}}
                                    
                                       <div class="modal fade" id="tedit" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <bold>
                                                            <italic>
                                                                <h5 style="font-family:serif ;color:deeppink "class="modal-title" id="exampleModalLabel"><b>Edit
                                                                    Teacher Information<b></h5>
                                                            </italic>
                                                        </bold>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('teacher.update','test')}}" method="POST"  enctype="multipart/form-data">
                                                        {{method_field('patch')}}
                                                        @csrf
                                                        <div class="modal-body">  
                                                        <input type="hidden"  name="teacher_id" id="id" value="">
                                                            @include('campus.teacher.tformforedit')
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                                        </div>
                                                      </div>
                                                    </form>
                                                </div>
                                           </div>
                                       </div>
                                       {{--end of modal foe edit button--}}
                                </table>
                           </div>
                        </div>
                   </section>                                                                            
                </div>              
            </div>
        </div>
    </div>
    
@endsection

