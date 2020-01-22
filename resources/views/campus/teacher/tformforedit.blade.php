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
        <label for="date">Date</label>
        <input type="date" name='date' class="form-control" id="date" placeholder="">
    </div>
{{--
    <div class="container">
        <label for="image">Select Image Upload</label>
        <div class="content">
            <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="image" id="image">
            </form>
        </div>
    </div>
--}}


    
