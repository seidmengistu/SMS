 <div class="form-group">
        <label for="fullname">Unique Code</label>
        <input type="text" name='uniquecode' class="form-control" id="fullname" placeholder="">

        @error('fullname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="year">Full Name</label>
       <input type="text" name='fullname' class="form-control" id="fullname" placeholder="">
    </div>

     <div class="form-group">
        <label for="fullname">Adress</label>
        <input type="text" name='adress' class="form-control" id="adress" placeholder="">

        @error('fullname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="year">Phone Number</label>
       <input type="text" name='quantity' class="form-control" id="phonenumber" placeholder="">
    </div>

 
    <div class="form-group">
        <label for="department">Occuption</label>
        <select name="department" class="form-control" id="occuption">
            <option style="font-family:bookman ;color:Blue  ">Select Occuption</option>
            <option style="font-family:bookman ;color:Blue  "value="Civil Servant">
                1.Civil Servant</option>
            <option style="font-family:bookman ;color:Blue  "value="Lecturer">
                2.Lecturer
            </option>
            <option style="font-family:bookman ;color:Blue  "value="Other">
                3.Other
            </option>
        </select>
    </div>

<div class="form-group">
        <label for="department">Department</label>
        <select name="department" class="form-control" id="department">
            <option style="font-family:bookman ;color:Blue  ">Select Department</option>
            <option style="font-family:bookman ;color:Blue  "value="Computer Science & Engineering">
                1.Computer Science & Engineering</option>
            <option style="font-family:bookman ;color:Blue  "value="Electronics & commpunication engineering">
                2.Electronics & communication Engineering
            </option>
            <option style="font-family:bookman ;color:Blue  "value="Elctrical power & control engineering">
                3.Elctrical power & control Engineering
            </option>
            <option style="font-family:bookman ;color:Blue  "value="Mechanical Engineering">
                4.Mchanical Engineering</option>
            <option style="font-family:bookman ;color:Blue  "value="MaterialsEnginnering">
                5.Materials Engineering</option>
            <option style="font-family:bookman ;color:Blue  "value="Chemical Engineering">6.Chemical
                Engineering </option>
            <option style="font-family:bookman ;color:Blue  "value="Architecture Engineering">
                7.Architecture Engineering</option>
            <option style="font-family:bookman ;color:Blue  "value="Civil Engineering">8.Civil
                Engineering</option>
            <option style="font-family:bookman ;color:Blue  "value="Applied Science">9.Applied
                Science</option>
        </select>
    </div>
 


    
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name='date' class="form-control" id="date" placeholder="">
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>