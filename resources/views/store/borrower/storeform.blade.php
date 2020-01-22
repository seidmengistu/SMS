 <div class="form-group">
     <label for="code">Code</label>
     <input type="text" name='bcode' class="form-control" id="bcode" placeholder="" value="{{$ran}}">

     <div class="form-group">
         <label for="bfullname">Fullname Name</label>
         <input type="text" name='bfullname' class="form-control" id="bfullname" placeholder="">
     </div>

      <div class="form-group">
        <label for="badress">Adress</label>
        <input type="text" name='badress' class="form-control" id="badress" placeholder="">
    </div>

     


     <div class="form-group">
         <label for="phonenumber">Phone Number</label>
         <input type="text" name='bphonenumber' class="form-control" id="bphonenumber" placeholder="">
     </div>


     <div class="form-group">
         <label for="ocuption">Occupation</label>
         <select name="boccupation" class="form-control" id="boccupation">
             <option style="font-family:palatino ;color:indigo ">Occupation</option>
             <option style="font-family:palatino ;color:indigo " value="Civil Servant">1.Civil Servant</option>
             <option style="font-family:palatino ;color:indigo " value="Lecturer">2.Lecturer</option>
             <option style="font-family:palatino ;color:indigo " value="Other">3.Other</option>
             
         </select>
     </div>

     

     <div class="form-group">
         <label for="date">Date</label>
         <input type="date" name='date' class="form-control" id="date" placeholder="">
     </div>
 </div>
 <div class="modal-footer">
     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
     <button type="submit" class="btn btn-primary">ADD</button>
 </div>
 </div>
