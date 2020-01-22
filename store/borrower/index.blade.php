@extends('layouts.admin_template')
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
                          <a href="{{route('borrower.index')}}" class="nav-link">                    
                           <p style="font-family:algerian;color:red">The Person With This Code Is Not Registered </p>
                          </a>
                      </div>
                 @else
                      <h4 style="font-family:algerian;color:blue"  class="card-title"> <b> <i> Borrower List</i></b></h4>
                      </div>
                     <section class='content'>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="table-responsive">
                                <table class="table table table-bordered table-striped mb-0">
                                    <thead class=" text-success">
                                        <th style="font-family:georgia;color:ForestGreen">Full Name</th>
                                        <th  style="font-family:georgia;color:Fuchsia">Adress</th>
                                        
                                        <th style="font-family:georgia;color:Green"> Phone number</th>
                                        <th style="font-family:georgia;color:indigo"> Occupation</th>
                                        <th style="font-family:georgia;color:Crimson"> Date</th>
                                        <th style="font-family:georgia;color:RebeccaPurple"> Edit</th>
                                        <th style="font-family:georgia;color:Red"> Delete</th>
                                        
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($results as $b )
                                        <tr>

                                            <td style="font-family:serif ;color:ForestGreen ">{{$b->bfullname}}</td>
                                            <td style="font-family:times new roman ;color:Fuchsia">{{$b->badress}}</td>
                                           
                                            <td style="font-family:times;color:Green  ">{{$b->bphonenumber}}</td>
                                            <td style="font-family:palatino ;color:indigo ">{{$b->boccuption}}</td>
                                            <td style="font-family:serif ;color:Crimson ">{{$b->date}}</td>
                                            <td>  
                                            <button  class="btn btn-info"  style="font-family:Bodoni MT Black"
                                            data-fullname="{{$b->bfullname}}"
                                            data-idnumber="{{$b->badress}}" 
                                           
                                            data-mark="{{$b->bphonenumber}}"  
                                            data-occupation="{{$b->boccupation}}" 
                                            data-date="{{$b->date}}" 
                                            data-id="{{$b->id}}"
                                            data-toggle="modal" data-target="#edit"
                                            ><b>Edit</b></button>
                                            </td>
                                            <td>
                                           <button style="font-family:Bodoni MT Black"class="btn btn-danger" data-id="{{$b->id}}" data-toggle="modal" data-target="#delete"
                                           ><b>Delete</b></button>
                                            </td>
                                        </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
@endif
@else
             <h4 style="font-family:times new roman;color:gold"  class="card-title"> <b> <i> Borrower List</i></b></h4>
                </div>
                    <section class='content'>
                        <div class="table-wrapper-scroll-y my-custom-scrollbar">
                            <div class="table-responsive">
                                <table id="datatable" class="table table-dark">
                                    <thead class=" text-success">
                                        <th style="font-family:georgia;color:ForestGreen ">Full Name</th>
                                        <th  style="font-family:georgia;color:Fuchsia   ">Adress</th>     
                                      
                                        <th style="font-family:georgia;color:Green "> Phone Number</th>
                                        <th style="font-family:georgia;color:indigo  "> Occuption</th>
                                        <th style="font-family:georgia;color:DeepPink   "> Date</th>
                                        <th style="font-family:georgia;color:RebeccaPurple"> Edit</th>
                                        <th style="font-family:georgia;color:Red  "> Delete</th>
                                        
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($borrowers as $b )
                                        <tr>

                                        <td style="font-family:serif ;color:ForestGreen ">{{$b->bfullname}}</td>
                                        <td style="font-family:times new roman ;color:Fuchsia   ">{{$b->badress}}</td>
                                        
                                        <td style="font-family:times;color:Green  ">{{$b->bphonenumber}}</td>
                                        <td style="font-family:palatino ;color:indigo ">{{$b->boccupation}}</td>
                                        <td style="font-family:times ;color:DeepPink ">{{$b->date}}</td>
                                            <td>  
                                            <button  class="btn btn-info"  style="font-family:Bodoni MT Black"
                                            data-bfullname="{{$b->bfullname}}"
                                            data-badress="{{$b->badress}}" 
                                           
                                            data-bphonenumber="{{$b->bphonenumber}}"  
                                            data-boccupation="{{$b->boccupation}}" 
                                            data-date="{{$b->date}}" 
                                            data-id="{{$b->id}}" 
                                            data-toggle="modal" data-target="#edit"
                                            ><b>Edit</b></button>
                                            </td>
                                            <td>
                                           <button style="font-family:Bodoni MT Black"class="btn btn-danger" data-id="{{$b->id}}"  data-toggle="modal" data-target="#delete"
                                           ><b>Delete</b></button>
                                            </td>
                                        </td>
                                            
                                        </tr>
                                        @endforeach
                                        <div class="row">
                                            <div class="col-12 text-center"> 
                                                {{$borrowers->links()}}
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
                                                   <form action="{{route('borrower.destroy','test')}}" method="POST"  enctype="multipart/form-data">
                                                        {{method_field('delete')}}
                                                    
                                                        @csrf
                                                        <div class="modal-body">  
                                                            <p style="font-family:serif" class="text-center"> 
                                                                Are You Sure You Want To Delete This?
                                                            </p>
                                                        <input type="hidden"  name="borrower_id" id="id" value="">
                                                            
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
                                                                    Borrower  Information<b></h5>
                                                            </italic>
                                                        </bold>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                 <form action="{{route('borrower.update','test')}}" method="POST"  >
                                                        {{method_field('patch')}}
                                                  
                                                        @csrf
                                                        <div class="modal-body">  
                                                        <input type="hidden"  name="borrower_id" id="id" value="">
                                                            @include('store.borrower.formforedit')
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                                        </div>
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

