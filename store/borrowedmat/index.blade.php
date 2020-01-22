@extends('layouts.borrowedmaterial')
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
                       <div class="shadowbox"
                          <a href="{{route('student.index')}}" class="nav-link">                    
                           <p style="font-family:algerian;color:red">The Person With This Code Is Not Registered </p>
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

             <h4 style="font-family:times new roman;color:gold"  class="card-title"> <b> <i> Borrowed List</i></b></h4>
                </div>
                    <section class='content'>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="table-responsive">
                                <table id="datatable" class="table table table-bordered table-striped mb-0">
                                    <thead class=" text-success">
                                        <th style="font-family:georgia;color:ForestGreen ">Full Name</th>
                                      
                                        <th style="font-family:georgia ;color:MediumVioletRed   ">Phone Number </th>
                                        <th style="font-family:georgia ;color:MediumVioletRed   ">Occupation </th>
                                        
                                        <th style="font-family:georgia;color:indigo "> Materials Name</th>
                                        <th style="font-family:georgia;color:indigo "> materials Serial number</th>
                                        <th style="font-family:georgia;color:DeepPink  "> Quantity</th>
                                        <th style="font-family:georgia;color:DeepPink  "> Condition</th>
                                        <th style="font-family:georgia;color:DeepPink  "> Store Number</th>
                                        <th style="font-family:georgia;color:Blue   "> Date</th>
                                        
                                        <th style="font-family:georgia;color:RebeccaPurple   "> Edit</th>
                                        <th style="font-family:georgia;color:Red  "> Delete</th>
                                        
                                    </thead>
                                    
                                    <tbody>
                                       @foreach ($borroweds as $s )
                                        <tr>

                                        <td style="font-family:serif ;color:ForestGreen">{{$s->bfullname}}</td>
                                        
                                        <td style="font-family:georgia ;color:MediumVioletRed">{{$s->bphonenumber}}</td>
                                        <td style="font-family:georgia ;color:MediumVioletRed">{{$s->boccupation}}</td>
                                        
                                        <td style="font-family:palatino ;color:indigo ">{{$s->materialsname}}</td>
                                        <td style="font-family:palatino ;color:indigo ">{{$s->materialsserialnumber}}</td>
                                        <td style="font-family:times ;color:DeepPink ">{{$s->quantity}}</td>
                                        <td style="font-family:bookman ;color:Blue  ">{{$s->condition}}</td>
                                        <td style="font-family:bookman ;color:Blue  ">{{$s->storenumber}}</td>
                                            <td style="font-family:serif ;color:Crimson ">{{$s->date}}</td>
                                            <td>  

                                            <button  class="btn btn-info"  style="font-family:Bodoni MT Black"
                                            data-bfullname="{{$s->bfullname}}"
                                            data-badress="{{$s->badress}}" 
                                            data-bphonenumber="{{$s->bphonenumber}}"
                                            data-boccupation="{{$s->boccupation}}"

                                            data-materialsname="{{$s->materialsname}}"  
                                            data-materialsserialnumber="{{$s->materialsserialnumber}}" 
                                             data-storenumber="{{$s->storenumber}}" 
                                              data-shelfnumber="{{$s->shelfnumber}}"  
                                            data-quantity="{{$s->quantity}}" 
                                            data-condition="{{$s->condition}}" 
                                            data-date="{{$s->date}}" 
                                            data-id="{{$s->id}}" 
                                           
                                            data-toggle="modal" data-target="#bedit"
                                            ><b>Edit</b></button>
                                            </td>
                                            <td>
                                           <button style="font-family:Bodoni MT Black"class="btn btn-danger" data-id="{{$s->id}}" data-toggle="modal" data-target="#bdelete"
                                           ><b>Delete</b></button>
                                            </td>
                                        </td>
                                            
                                        </tr>
                                        @endforeach
                                        <div class="row">
                                            <div class="col-12 text-center"> 
                                                {{$borroweds->links()}}
                                            </div>
                                        </div>
                                    
                                    </tbody>

            @endisset
                                     
                                       {{--modal for delete--}}
                                        
                                       <div class="modal fade" id="bdelete" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content bg-danger">
                                                    <div class="modal-header bg-heading">
                                                        <h5 style="font-family:times new roman" class="modal-title text-center bg-gold" id="exampleModalLabel" > Delete Confirmation</h5>
                                                           
                                                        <button type="button" class="close" data-dismiss="modal"aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                                            
                                                    </div>
                                                    <form action="{{route('borrowedmat.destroy','test')}}" method="POST"  enctype="multipart/form-data">
                                                        {{method_field('delete')}}
                                                        @csrf
                                                        <div class="modal-body">  
                                                            <p style="font-family:serif" class="text-center"> 
                                                                Are You Sure You Want To Delete This?
                                                            </p>
                                                        <input type="hidden"  name="borrowed_id" id="id" value="">
                                                            
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
                                    
                                       <div class="modal fade" id="bedit" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <bold>
                                                            <italic>
                                                                <h5 style="font-family:serif ;color:deeppink "class="modal-title" id="exampleModalLabel"><b>Edit
                                                                    Borrowed Materials Information<b></h5>
                                                            </italic>
                                                        </bold>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                   <form action="{{route('borrowedmat.update','test')}}" method="POST"  enctype="multipart/form-data">
                                                        {{method_field('patch')}}
                                                  
                                                        @csrf
                                                        <div class="modal-body">  
                                                        <input type="hidden"  name="borrowed_id" id="id" value="">
                                                            @include('store.borrowedmat.formforedit')
                                                        
                                                    
                                                      </div>
                                                    </form>
                                                </div>
                                           </div>
                                       </div>
                                       {{--end of modal for delete button--}}
                                </table>
                           </div>
                        </div>
                   </section>                                                                            
                </div>              
            </div>
        </div>
    </div>
    
@endsection

