<div class="form-group">
    <label for="code">Code</label>
    <input type="text" name='code' class="form-control" id="code" placeholder="" value="{{$ran}}">
</div>


<div class="form-group">
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
    <input id="idnumber" type="text" class="form-control @error('idnumber') is-invalid @enderror" name="idnumber"
        value="{{ old('idnumber') }}" required autocomplete="idnumber" autofocus>

    @error('idnumber')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
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
    <label for="program">program</label>
    <select name="program" class="form-control" id="program">
        <option>Select Program</option>
        <option value="Regular">1.Regular</option>
        <option value="Extension">2.Extension</option>
        <option value="Other">3.Other</option>
    </select>
</div>

<div class="form-group">
    <label for="year">Year</label>
    <select name="year" class="form-control" id="year">
        <option>Select Year</option>
        <option value="1">1</option>
        <option value="2"> 2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
</div>
<div class="form-group">
    <label for="department">Department</label>
    <select name="department" class="form-control" id="department">
        <option>Select Department</option>
        <option value="Computer Science & Engineering">1.Computer Science & Engineering</option>
        <option value="Electronics & commpunication engineering">2.Electronics & communication Engineering</option>
        <option value="Elctrical power & control engineering">3.Elctrical power & control Engineering</option>
        <option value="Mechanical Engineering">4.Mechanical Engineering</option>
        <option value="MaterialsEnginnering">5.MaterialsEnginnering</option>
        <option value="Chemical Engineering">6.Chemical Engineering </option>
        <option value="Architecture Engineering">7.Architecture Engineering</option>
        <option value="Civil Engineering">8.Civil Engineering</option>
        <option value="Applied Science">9.Applied Science</option>
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
