 <div class="row">



  

     @if( $borrower != null && $material != null )

     <form class="col-md-3" method="POST" action="{{route('borrowedmat.store')}}">
         @csrf
         <input type="hidden" class="form-control" id="fullname" name="bfullname" placeholder=""
             value="{{$borrower->bfullname}}">

         <input type="hidden" class="form-control" id="adress" placeholder="" name="badress"
             value={{$borrower->badress}}>



         <input type="hidden" class="form-control" id="phonenumber" placeholder="" name="bphonenumber"
             value={{$borrower->bphonenumber}}>

         <input type="hidden" class="form-control" id="occupation" placeholder="" name=" boccupation"
             value={{$borrower->boccupation}}>


         <input type="hidden" class="form-control" id="department" name="department" placeholder=""
             value={{$material->department}}>

         <input type="hidden" class="form-control" id="materialsname" name="materialsname" placeholder=""
             value={{$material->materialsname}}>

         <input type="hidden" class="form-control" id="materialsserialnumber" name="materialsserialnumber"
             placeholder="" value={{$material->materialsserialnumber}}>

         <input type="hidden" class="form-control" id="condition" placeholder="" name="condition"
             value={{$material->condition}}>

         <input type="hidden" class="form-control" id="shelfnumber" placeholder="" name="shelfnumber"
             value={{$material->shelfnumber}}>

           <input type="hidden" class="form-control" id="shelfnumber" placeholder="" name="storenumber"
             value={{$material->storenumber}}>
             


         <div class="form-group">
             <label for="date">Date</label>
             <input type="date" name='date' class="form-control" id="date" placeholder="">
         </div>

         <div class="form-group">
             <label for="quantity">Quantity</label>
             <input type="text" class="form-control" id="quantity" placeholder="" name="quantity">
         </div>

         <button class="btn btn-warning" type="submit" name='borrow' class="form-control" id="save"
             placeholder="">Save</button>

             @if(session('status'))
                  <div class="alert alert-success" role="alert">
                    {{session('status')}}
                   </div>
                 @endif

     </form>
     @endif


     {{--to search borrower--}}

     <form class="col-md-4" method="get" action="{{route("borrower.show",'test')}}">
         <label style="font-family:georgia;color:cornflowerblue">Search Borrower</label><br>

         <input class="col-md-8" type="text" name='show' id="show" placeholder="Enter Borrower Code">
         <button type="submit" class="btn btn-primary" for="show">Search</button>


         @if( $borrower != null )

         <div class="form-group">
             <label for="quantity">Fullname</label>
             <input type="text" class="form-control" id="fullname" placeholder="" name="bfullname"
                 value="{{$borrower->bfullname}}">
         </div>
         <div class="form-group">
             <label for="quantity">Adress</label>
             <input type="text" class="form-control" id="adress" placeholder="" name="badress"
                 value={{$borrower->badress}}>
         </div>

         <div class="form-group">
             <label for="quantity">Phone Number</label>
             <input type="text" class="form-control" id="phonenumber" placeholder="" name="bphonenumber"
                 value={{$borrower->bphonenumber}}>
         </div>
         <div class="form-group">
             <label for="quantity">Occupation</label>
             <input type="text" class="form-control" id="occupation" placeholder="" name="boccupation"
                 value={{$borrower->boccupation}}>
         </div>

         @endif
     </form>
     {{--To Search Borrower--}}
     <form class="col-md-4" method="get" action="{{route("material.show",'test')}}">
         <label style="font-family:georgia;color:ForestGreen  ">Search material</label><br>
         <div class="form-group">
             @if( $borrower != null )

             <input type="hidden" class="form-control" id="fullname" placeholder="" value="{{$borrower->bcode}}"
                 name="bcode">
             @endif
             <input class="col-md-8" type="text" class="form-control" id="msearch" name="msearch"
                 placeholder="Enter Material Name">
             <button type="submit" class="btn btn-primary">Serach</button><br>
         </div>

         @if($material != null )

         <div class="form-group">
             <label for="department">Department</label>
             <input type="text" class="form-control" id="department" placeholder=""
              value={{$material->department}}>
         </div>

         <div class="form-group">
             <label for="materialsname">Materials Name</label>
             <input type="text" class="form-control" id="materialsname" placeholder=""
                 value={{$material->materialsname}}>
         </div>

         <div class="form-group">
             <label for="materials serial number">Materials Serial Number</label>
             <input type="text" class="form-control" id="materialsserialnumber" placeholder=""
                 value={{$material->materialsserialnumber}}>
         </div>

         

         <div class="form-group">
             <label for="condition">Condition</label>
             <input type="text" class="form-control" id="condition" placeholder="" 
             value={{$material->condition}}>
         </div>

         <div class="form-group">
             <label for="shelfnumber">Shelf Number</label>
             <input type="text" class="form-control" id="shelfnumber" placeholder="" 
             value={{$material->shelfnumber}}>
         </div>

         <div class="form-group">
             <label for="shelfnumber">Store Number</label>
             <input type="text" class="form-control" id="storenumber" placeholder="" 
             value={{$material->storenumber}}>
         </div>

         @endif
     </form>


 </div>
