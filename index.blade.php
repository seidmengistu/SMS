@extends('layouts.campuspolice')
@section('title')
SMS
@endsection
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-20">
                <div class="card">
                     <div class="card-header">
                  @isset($results)

                 @if(count($results)==0)
                       <div class="content"
                          <a href="{{route('teacher.index')}}" class="nav-link">                    
                           <center><p style="font-family:new times roman;color:red">Student With This Code Is Not Registered </p><center>

                               
                               <a href="{{route('student.create')}}" class="btn btn-success"> Register</a>
                                <a href="{{route('student.index')}}" class="btn btn-primary"> Back</a>
                               
                          </a>
                      </div>
                 @else
                      <h4 style="font-family:algerian;color:blue"  class="card-title"> <b> <i> STUDENT LIST</i></b></h4>
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
                                        <th style="font-family:georgia;color:indigo "> program</th>
                                        <th style="font-family:georgia;color:DeepPink  "> Year</th>
                                        <th style="font-family:georgia;color:Blue   "> Department</th>
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
                                            <td style="font-family:palatino ;color:indigo ">{{$s->program}}</td>
                                            <td style="font-family:times ;color:DeepPink ">{{$s->year}}</td>
                                            <td style="font-family:bookman ;color:Blue  ">{{$s->department}}</td>
                                            <td style="font-family:serif ;color:Crimson ">{{$s->date}}</td>
                                            <td>  
                                            <button  class="btn btn-info"  style="font-family:Bodoni MT Black"
                                            data-fullname="{{$s->fullname}}"
                                            data-idnumber="{{$s->idnumber}}" 
                                            data-serialnumber="{{$s->serialnumber}}"
                                            data-mark="{{$s->mark}}"  
                                            data-program="{{$s->program}}" 
                                            data-year="{{$s->year}}" 
                                            data-department="{{$s->department}}" 
                                            data-date="{{$s->date}}" 
                                            {{--data-image="{{$s->image}}" --}} 
                                            data-id="{{$s->id}}"
                                            data-toggle="modal" data-target="#edit"
                                            ><b>Edit</b></button>
                                            </td>
                                            <td>
                                           <button style="font-family:Bodoni MT Black"class="btn btn-danger" data-id="{{$s->id}}" data-toggle="modal" data-target="#delete"
                                           ><b>Delete</b></button>
                                            </td>
                                        </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
@endif
@else





             <h4 style="font-family:algerian;color:blue"  class="card-title"> <b> <i> STUDENT LIST</i></b></h4>
                </div>
                    <section class='content'>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="table-responsive">
                                <table id="datatable" class="table table table-bordered table-striped mb-0">
                                    <thead class=" text-success">
                                        <th style="font-family:georgia;color:ForestGreen  ">Name</th>
                                        <th  style="font-family:georgia;color:Fuchsia   ">ID Number</th>
                                        <th style="font-family:georgia ;color:MediumVioletRed   ">Serial Number </th>
                                        <th style="font-family:georgia;color:Green   "> Mark</th>
                                        <th style="font-family:georgia;color:indigo "> program</th>
                                        <th style="font-family:georgia;color:DeepPink  "> Year</th>
                                        <th style="font-family:georgia;color:Blue   "> Department</th>
                                        <th style="font-family:georgia;color:Crimson  "> Date</th>
                                        <th style="font-family:georgia;color:RebeccaPurple   "> Edit</th>
                                        <th style="font-family:georgia;color:Red  "> Delete</th>
                                        
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($students as $s )
                                        <tr>

                                            <td style="font-family:serif ;color:ForestGreen ">{{$s->fullname}}</td>
                                            <td style="font-family:times new roman ;color:Fuchsia   ">{{$s->idnumber}}</td>
                                            <td style="font-family:georgia ;color:MediumVioletRed  ">{{$s->serialnumber}}</td>
                                            <td style="font-family:times;color:Green  ">{{$s->mark}}</td>
                                            <td style="font-family:palatino ;color:indigo ">{{$s->program}}</td>
                                            <td style="font-family:times ;color:DeepPink ">{{$s->year}}</td>
                                            <td style="font-family:bookman ;color:Blue  ">{{$s->department}}</td>
                                            <td style="font-family:serif ;color:Crimson ">{{$s->date}}</td>
                                            <td>  
                                            <button  class="btn btn-info"  style="font-family:Bodoni MT Black"
                                            data-fullname="{{$s->fullname}}"
                                            data-idnumber="{{$s->idnumber}}" 
                                            data-serialnumber="{{$s->serialnumber}}"
                                            data-mark="{{$s->mark}}"  
                                            data-program="{{$s->program}}" 
                                            data-year="{{$s->year}}" 
                                            data-department="{{$s->department}}" 
                                            data-date="{{$s->date}}" 
                                            {{--data-image="{{$s->image}}" --}} 
                                            data-id="{{$s->id}}"
                                            data-toggle="modal" data-target="#edit"
                                            ><b>Edit</b></button>
                                            </td>
                                            <td>
                                           <button style="font-family:Bodoni MT Black"class="btn btn-danger" data-id="{{$s->id}}" data-toggle="modal" data-target="#delete"><b>Delete</b></button>
                                            </td>
                                        </td>
                                            
                                        </tr>
                                        @endforeach
                                        <div class="row">
                                            <div class="col-12 text-center"> 
                                                {{$students->links()}}
                                            </div>
                                        </div>
                                    </tbody>

            @endisset
                                     
                                       {{--modal for delete--}}
                                        
                                       <div class="modal fade" id="delete" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content bg-danger">
                                                    <div class="modal-header bg-heading">
                                                        <h5 style="font-family:times new roman" class="modal-title text-center bg-gold" id="exampleModalLabel" > Delete Confirmation</h5>
                                                           
                                                        <button type="button" class="close" data-dismiss="modal"aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                            
                                                    </div>
                                                    <form action="{{route('student.destroy','test')}}" method="POST"  enctype="multipart/form-data">
                                                        {{method_field('delete')}}
                                                        @csrf
                                                        <div class="modal-body">  
                                                            <p style="font-family:serif" class="text-center"> 
                                                                Are You Sure You Want To Delete This?
                                                            </p>
                                                        <input type="hidden"  name="student_id" id="id" value="">
                                                            
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

                                    {{--modall for edit btton--}}
                                    
                                       <div class="modal fade" id="edit" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <bold>
                                                            <italic>
                                                                <h5 style="font-family:serif ;color:deeppink "class="modal-title" id="exampleModalLabel"><b>Edit
                                                                    Student Information<b></h5>
                                                            </italic>
                                                        </bold>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('student.update','test')}}" method="POST"  enctype="multipart/form-data">
                                                        {{method_field('patch')}}
                                                        @csrf
                                                        <div class="modal-body">  
                                                        <input type="hidden"  name="student_id" id="id" value="">
                                                            @include('campus.student.formforedit')
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                                        </div>
                                                      </div>
                                                    </form>
                                                </div>
                                           </div>
                                       </div>
                                       {{--end of modal for edit button--}}
                                </table>
                           </div>
                        </div>
                   </section>                                                                            
                </div>              
            </div>
        </div>
    </div>
    
@endsection

# studenlist
# studenlist
