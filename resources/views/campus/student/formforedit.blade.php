<div class="modal-body">
    <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" name='fullname' class="form-control" id="fullname" placeholder="">

        @error('fullname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="idnumber">ID-number</label>
        <input type="text" name='idnumber' class="form-control" id="idnumber" placeholder="">
    </div>
    <div class="form-group">
        <label for="serialnumber">Serial-number</label>
        <input type="text" name='serialnumber' class="form-control" id="serialnumber" placeholder="">
    </div>

    <div style="font-family:serif;color:ForestGreen "class="form-group">
        <label for="mark">Select Mark</label>
        <select name="mark" class="form-control" id="mark">
            <option>Select Laptop Mark</option>
            <option style="font-family:serif ;color:ForestGreen "value="toshiba">1.Toshiaba</option>
            <option style="font-family:serif ;color:ForestGreen "value="dell">2.Dell</option>
            <option style="font-family:serif ;color:ForestGreen "value="samsung">3.Samsung</option>
            <option style="font-family:serif ;color:ForestGreen "value="hp">4.Hp</option>
            <option style="font-family:serif ;color:ForestGreen "value="apple">5.Apple</option>
            <option style="font-family:serif ;color:ForestGreen "value="Lenovo">6.Lenovo</option>
            <option style="font-family:serif ;color:ForestGreen "value="Asus">7.Asus</option>
            <option style="font-family:serif ;color:ForestGreen "value="Acer">8.Acer</option>
            <option style="font-family:serif ;color:ForestGreen "value="Iball">9.Iball</option>
            <option style="font-family:serif ;color:ForestGreen "value="Chromebox">10.Chromebook</option>

        </select>
    </div>

    <div class="form-group">
        <label for="program">program</label>
        <select name="program" class="form-control" id="program">
            <option style="font-family:palatino ;color:indigo ">Select Program</option>
            <option style="font-family:palatino ;color:indigo " value="regular">1.Regular</option>
            <option style="font-family:palatino ;color:indigo " value="extension">2.Extension</option>
            <option style="font-family:palatino ;color:indigo "value="other">3.Other</option>
        </select>
    </div>

    <div class="form-group">
        <label for="year">Year</label>
        <select name="year" class="form-control" id="year">
            <option style="font-family:times ;color:DeepPink ">Select Year</option>
            <option  style="font-family:times ;color:DeepPink "value="1">1</option>
            <option style="font-family:times ;color:DeepPink "value="2"> 2</option>
            <option style="font-family:times ;color:DeepPink "value="3">3</option>
            <option style="font-family:times ;color:DeepPink "value="4">4</option>
            <option style="font-family:times ;color:DeepPink "value="5">5</option>
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




    
