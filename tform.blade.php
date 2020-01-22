<div class="form-group">
    <label for="code">Code</label>
    <input type="text" name='code' class="form-control" id="" placeholder="" value="{{$ran}}">
</div>

<div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
    <label for="fullname">Full Name</label>
     <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname"
        value="{{ old('fullname') }}" required autocomplete="idnumber" autofocus>

    @error('fullname')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="idnumber">ID-number</label>
    <input type="text" name='idnumber' class="form-control" id="" placeholder="">
</div>
<div class="form-group">
    <label for="serialnumber">Serial-number</label>
    <input id="serialnumber" type="text" class="form-control @error('serialnumber') is-invalid @enderror" name="serialnumber"
        value="{{ old('serialnumber') }}" required autocomplete="idnumber" autofocus>

    @error('serialnumber')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="mark">Select Mark</label>
    <select name="mark" class="form-control" id="mark">
        <option>Select Laptop Mark</option>
        <option value="toshiba">1.Toshiaba</option>
        <option value="dell">2.Dell</option>
        <option value="samsung">3.Samsung</option>
        <option value="HP">4.Hp</option>
        <option value="Apple">5.Apple</option>
        <option value="Lenovo">6.Lenovo</option>
        <option value="Asus">7.Asus</option>
        <option value="Acer">8.Acer</option>
        <option value="Iball">9.Iball</option>
        <option value="Chromebook">10.Chromebook</option>
    </select>
</div>



<div class="form-group">
    <label for="date">Date</label>
    <input type="date" name='date' class="form-control" id="date" placeholder="">
</div>

<div class="container">
    <label for="image">Select Image Upload</label>
    <div class="content">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="image">
        </form>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-success">Save</button>
</div>
