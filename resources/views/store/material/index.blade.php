@extends('layouts.addmaterial')
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
                          <a href="{{route('material.index')}}" class="nav-link">                    
                           <p style="font-family:algerian;color:red">Materials Name Not Found </p>
                          </a>
                      </div>
                  @else
                      <h4 style="font-family:algerian;color:blue"  class="card-title"> <b> <i> Material List</i></b></h4>
                      </div>
                     <section class='content'>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="table-responsive">
                                <table class="table table table-bordered table-striped mb-0">
                                    <thead class=" text-success">
                                        <th style="font-family:georgia;color:ForestGreen  ">Department</th>
                                        <th  style="font-family:georgia;color:Fuchsia   ">Material Name</th>
                                        <th style="font-family:georgia ;color:MediumVioletRed   ">Serial Number </th>
                                        <th style="font-family:georgia;color:Green   "> Quantity</th>
                                        <th style="font-family:georgia;color:indigo "> Condition</th>
                                        <th style="font-family:georgia;color:DeepPink  "> Shelfnumber</th>
                                        <th style="font-family:georgia;color:Blue   "> Store Number</th>
                                        <th style="font-family:georgia;color:Crimson  "> Date</th>
                                        <th style="font-family:georgia;color:RebeccaPurple   "> Edit</th>
                                        <th style="font-family:georgia;color:Red  "> Delete</th>
                                        
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($results as $m )
                                        <tr>

                                           <td style="font-family:serif ;color:ForestGreen ">{{$m->department}}</td>
                                            <td style="font-family:times new roman ;color:Fuchsia">{{$m->materialsname}}</td>
                                            <td style="font-family:georgia ;color:MediumVioletRed">{{$m->materialsserialnumber}}</td>
                                            <td style="font-family:times;color:Green">{{$m->quantity}}</td>
                                            <td style="font-family:palatino ;color:indigo">{{$m->condition}}</td>
                                            <td style="font-family:times ;color:DeepPink">{{$m->shelfnumber}}</td>
                                            <td style="font-family:bookman ;color:Blue">{{$m->storenumber}}</td>
                                            <td style="font-family:serif ;color:Crimson">{{$m->date}}</td>
                                            <td>  
                                            <button  class="btn btn-info"  style="font-family:Bodoni MT Black"
                                            data-department="{{$m->department}}"
                                            data-materialsserialnumber="{{$m->materialsserialnumber}}" 
                                            data-quantity="{{$m->quantity}}"
                                            data-condition="{{$m->condition}}"  
                                            data-shelfnumber="{{$m->shelfnumber}}" 
                                            data-storenumber="{{$m->storenumber}}" 
                                            data-date="{{$m->date}}" 
                                            data-id="{{$m->id}}"

                                            data-toggle="modal" data-target="#edit"
                                            ><b>Edit</b></button>
                                            </td>
                                            <td>
                                           <button style="font-family:Bodoni MT Black"class="btn btn-danger" data-id="{{$m->id}}" data-toggle="modal" data-target="#delete"
                                           ><b>Delete</b></button>
                                            </td>
                                        </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                
                      @endif
                @else
             <h4 style="font-family:times new roman;color:hotpink"  class="card-title"> <b> <i> Materials List</i></b></h4>
                </div>
                    <section class='content'>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="table-responsive">
                                <table id="datatable" class="table table table-bordered table-striped mb-0">
                                    <thead class=" text-success">
                                        <th style="font-family:georgia;color:ForestGreen ">Department</th>
                                        <th  style="font-family:georgia;color:Fuchsia   ">Materials Name</th>
                                        <th style="font-family:georgia ;color:MediumVioletRed">Serial Number </th>
                                        <th style="font-family:georgia;color:Green   "> Quantity</th>
                                        <th style="font-family:georgia;color:indigo "> Condition</th>
                                        <th style="font-family:georgia;color:Blue   "> Store Number</th>
                                        <th style="font-family:georgia;color:DeepPink  "> Shelf Number</th>
                                        
                                        <th style="font-family:georgia;color:Crimson  "> Date</th>
                                        <th style="font-family:georgia;color:RebeccaPurple   "> Edit</th>
                                        <th style="font-family:georgia;color:Red  "> Delete</th>
                                        
                                    </thead>
                                    
                                    <tbody>
                                       
                                        @foreach  ($materials as $m )
                                        <tr>

                                            <td style="font-family:serif ;color:ForestGreen ">{{$m->department}}</td>
                                            <td style="font-family:times new roman ;color:Fuchsia">{{$m->materialsname}}</td>
                                            <td style="font-family:georgia ;color:MediumVioletRed">{{$m->materialsserialnumber}}</td>
                                            <td style="font-family:times;color:Green">{{$m->quantity}}</td>
                                            <td style="font-family:palatino ;color:indigo">{{$m->condition}}</td>
                                            <td style="font-family:bookman ;color:Blue">{{$m->storenumber}}</td>
                                            <td style="font-family:times ;color:DeepPink">{{$m->shelfnumber}}</td>
                                          
                                            <td style="font-family:serif ;color:Crimson">{{$m->date}}</td>
                                            <td>  
                                            <button  class="btn btn-info"  style="font-family:Bodoni MT Black"
                                            data-department="{{$m->department}}"
                                            data-materialsname="{{$m->materialsname}}"
                                            data-materialsserialnumber="{{$m->materialsserialnumber}}" 
                                            data-quantity="{{$m->quantity}}"
                                            data-condition="{{$m->condition}}" 
                                            data-storenumber="{{$m->storenumber}}"  
                                            data-shelfnumber="{{$m->shelfnumber}}" 
                                            
                                            data-date="{{$m->date}}" 
                                            data-id="{{$m->id}}"
                                            data-toggle="modal" data-target="#edit"
                                            ><b>Edit</b></button>
                                            </td>
                                           <td>
                                           <button style="font-family:Bodoni MT Black"class="btn btn-danger" data-id="{{$m->id}}" data-toggle="modal" data-target="#delete"><b>Delete</b></button>
                                            </td>
                                        </td>
                                            
                                        </tr>
                                        @endforeach
                                        <div class="row">
                                            <div class="col-12 text-center"> 
                                                {{$materials->links()}}
                                            </div>
                                        </div>
                                    </tbody>
                                --}}
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
                                                    
                                                    <form action="{{route('material.destroy','test')}}" method="POST"  enctype="multipart/form-data">
                                                        {{method_field('delete')}}
                                                    
                                                        @csrf
                                                        <div class="modal-body">  
                                                            <p style="font-family:serif" class="text-center"> 
                                                                Are You Sure You Want To Delete This?
                                                            </p>
                                                        <input type="hidden"  name="material_id" id="id" value="">
                                                            
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

                                                   <form action="{{route('material.update','test')}}" method="POST">
                                                        {{method_field('patch')}}
                                                   
                                                        @csrf
                                                        <div class="modal-body">  
                                                        <input type="hidden" name="material_id" id="id" value="">
                                                            @include('store.material.matmodalforedit')
                                                        
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

